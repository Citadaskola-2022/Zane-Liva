<?php

namespace App;

class Phone
{
    private ?float $height;
    private ?float $width;

    private array $applist;
    private array $settings;

    public function __construct(
        private int    $version,
        private string $manufacturer,
        ?float         $height = null,
        ?float         $width = null,
    )
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function installApp(string $app): void
    {
        $this->applist[$app] = true;
    }

    public function getInstallApps(): array
    {
        return $this->appList;
    }


    public function getInstalledApps(): array
    {
        return array_keys(array_filter($this->appList, fn ($isInstalled) => !!$isInstalled));
    }
    public function isApplicationInstalled(string $app): bool
    {
        return isset($this->appList[$app]);
    }

    public function getSize(): ?string
    {
        if (!$this->height && !$this->width) {
            return null;
        }
        return 'H: ' . $this->height . ', W: ' . $this->width;
    }

    public function turnOnSetting(string $settings): void
    {
        $this->settings[$settings] = true;
    }
}
