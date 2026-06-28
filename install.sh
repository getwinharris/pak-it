#!/bin/bash
set -e

echo "==> Installing pak-it..."

# Check PHP
php -v >/dev/null 2>&1 || { echo "Error: PHP 8.3+ required"; exit 1; }

# Determine install dir
INSTALL_DIR="${1:-$PWD/pak-it}"
echo "    Target: $INSTALL_DIR"

# Create directory
mkdir -p "$INSTALL_DIR"

# Download latest release zip
RELEASES_URL="https://github.com/getwinharris/pak-it/releases"
VERSION="${VERSION:-latest}"
echo "    Version: $VERSION"

if command -v unzip &>/dev/null; then
    ZIP_URL="$RELEASES_URL/download/$VERSION/pak-it.zip"
    echo "    Downloading $ZIP_URL ..."
    curl -sSL "$ZIP_URL" -o /tmp/pak-it.zip
    unzip -o /tmp/pak-it.zip -d "$INSTALL_DIR" 2>/dev/null
    rm -f /tmp/pak-it.zip
elif command -v git &>/dev/null; then
    echo "    Cloning repository..."
    git clone --depth 1 --branch main https://github.com/getwinharris/pak-it.git "$INSTALL_DIR"
else
    echo "Error: Need unzip or git to install"; exit 1
fi

chmod +x "$INSTALL_DIR/pak-it" 2>/dev/null || true

# Verify installation
echo "==> Verifying..."
php "$INSTALL_DIR/pak-it" verify

echo ""
echo "==> pak-it installed!"
echo "    Usage: php $INSTALL_DIR/pak-it init <package>"
echo "    Or add to PATH: echo 'export PATH=\"\$PATH:$INSTALL_DIR\"' >> ~/.bashrc"
