<?PHP
/* Copyright 2005-2020, Lime Technology
 * Copyright 2012-2020, Bergware International.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License version 2,
 * as published by the Free Software Foundation.
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 */
?>
<?
$old = (is_file("/boot/config/vfio-pci.cfg")) ? rtrim(file_get_contents("/boot/config/vfio-pci.cfg")) : '';
$new = $_GET["cfg"];
if ($old !== $new) {
  exec("cp -f /boot/config/vfio-pci.cfg /boot/config/vfio-pci.cfg.bak");
  exec("echo \"$new\" >/boot/config/vfio-pci.cfg", $output, $myreturn );
  if ($myreturn !== "0") {
    echo "1";
  }
}
?>
