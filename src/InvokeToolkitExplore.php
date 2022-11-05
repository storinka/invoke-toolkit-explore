<?php

namespace Invoke\Toolkit\Explore;

class InvokeToolkitExplore
{
    private static string $start = "";
    private static string $end = "";
    private static bool $read = false;

    public static function render(string $url = "/invoke/getApiDocument",
                                  string $base = "/"): string
    {
        if (!static::$read) {
            $contents = file_get_contents(dirname(__FILE__) . "/index.html");

            $lines = explode("\n", $contents);

            static::$start = implode("\n", array_slice($lines, 0, 2));
            static::$end = implode("\n", array_slice($lines, 2));

            static::$read = true;
        }

        $script = "
        <script>
        window.__storinka_ix_base_path__ = `{$base}`;
        window.__storinka_ix_api_document_url__ = `{$url}`;
        </script>
        ";

        return static::$start . $script . static::$end;
    }
}
