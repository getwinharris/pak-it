<?php

class Resolver
{
    public function resolve(string $name, ?string $version = null): ?array
    {
        // Try npm first
        $res = $this->tryNpm($name, $version);
        if ($res) return $res + ['registry' => 'npm'];

        // Try PyPI next
        $res = $this->tryPypi($name, $version);
        if ($res) return $res + ['registry' => 'pypi'];

        return null;
    }

    private function tryNpm(string $name, ?string $version = null): ?array
    {
        $encoded = rawurlencode($name);
        $url = $version && $version !== 'latest'
            ? "https://registry.npmjs.org/$encoded/$version"
            : "https://registry.npmjs.org/$encoded/latest";

        $json = @file_get_contents($url, false, stream_context_create([
            'http' => ['timeout' => 10, 'user_agent' => 'pak-it/1.0'],
            'ssl'  => [
                'verify_peer'      => true,
                'verify_peer_name' => true,
                'allow_self_signed' => false,
            ],
        ]));
        if (!$json) return null;
        $data = json_decode($json, true);
        if (!isset($data['dist']['tarball'])) return null;

        $resolvedVersion = $data['version'] ?? ($version ?: 'latest');

        // When fetching a specific version, the npm API returns the version object directly,
        // which has the same structure as the /latest response.
        return [
            'tarball' => $data['dist']['tarball'],
            'version' => $resolvedVersion,
            'name'    => $name,
        ];
    }

    private function tryPypi(string $name, ?string $version = null): ?array
    {
        $encoded = rawurlencode($name);
        $url = $version && $version !== 'latest'
            ? "https://pypi.org/pypi/$encoded/$version/json"
            : "https://pypi.org/pypi/$encoded/json";

        $json = @file_get_contents($url, false, stream_context_create([
            'http' => ['timeout' => 10, 'user_agent' => 'pak-it/1.0'],
            'ssl'  => [
                'verify_peer'      => true,
                'verify_peer_name' => true,
                'allow_self_signed' => false,
            ],
        ]));
        if (!$json) return null;
        $data = json_decode($json, true);

        $resolvedVersion = $version && $version !== 'latest'
            ? $version
            : ($data['info']['version'] ?? '');

        // For specific version, PyPI returns similar structure
        $urls = $data['urls'] ?? [];
        $sdist = null;
        foreach ($urls as $u) {
            if (($u['packagetype'] ?? '') === 'sdist') {
                $sdist = $u['url']; break;
            }
        }
        if (!$sdist) return null;
        return [
            'tarball' => $sdist,
            'version' => $resolvedVersion,
            'name'    => $name,
        ];
    }
}
