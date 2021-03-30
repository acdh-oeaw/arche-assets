<?php

/*
 * The MIT License
 *
 * Copyright 2021 Austrian Centre for Digital Humanities.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace acdhOeaw;

class ArcheFileFormats {

    static public function getAll(): array {
        return json_decode(file_get_contents(__DIR__ . '/../../AcdhArcheAssets/formats.json'));
    }

    static public function getByMime(string $mime): ?object {
        foreach (self::getAll() as $format) {
            if (in_array($mime, $format->MIME_type) || in_array($mime, $format->Informal_MIME_type)) {
                return $format;
            }
        }
        return null;
    }

    static public function getByExtension(string $extension): array {
        $formats = [];
        foreach (self::getAll() as $format) {
            if (in_array($extension, $format->extensions)) {
                $formats[] = $format;
            }
        }
        return $formats;
    }
}

