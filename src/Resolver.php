<?php

class Resolver
{
    public function resolve(string $name): ?array
    {
        // Try npm first
        $res = $this->tryNpm($name);
        if ($res) return $res + ['registry' => 'npm'];

        // Try PyPI next
        $res = $this->tryPypi($name);
        if ($res) return $res + ['registry' => 'pypi'];

        return null;
    }

    private function tryNpm(string $name): ?array
    {
        $url = "https://registry.npmjs.org/" . rawurlencode($name) . "/latest";
        $json = @file_get_contents($url, false, stream_context_create([
            'http' => ['timeout' => 10, 'user_agent' => 'pak-it/1.0']
        ]));
        if (!$json) return null;
        $data = json_decode($json, true);
        if (!isset($data['dist']['tarball'])) return null;
        return [
            'tarball' => $data['dist']['tarball'],
            'version' => $data['version'] ?? 'latest',
            'name'    => $name,
        ];
    }

    private function tryPypi(string $name): ?array
    {
        $url = "https://pypi.org/pypi/" . rawurlencode($name) . "/json";
        $json = @file_get_contents($url, false, stream_context_create([
            'http' => ['timeout' => 10, 'user_agent' => 'pak-it/1.0']
        ]));
        if (!$json) return null;
        $data = json_decode($json, true);
        $latest = $data['info']['version'] ?? '';
        $sdist = null;
        foreach ($data['urls'] ?? [] as $u) {
            if (($u['packagetype'] ?? '') === 'sdist') {
                $sdist = $u['url']; break;
            }
        }
        if (!$sdist) return null;
        return [
            'tarball' => $sdist,
            'version' => $latest,
            'name'    => $name,
        ];
    }
}
