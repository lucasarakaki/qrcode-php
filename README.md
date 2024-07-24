<h1>PHP QR Code Generation Project</h1>

> This project is a PHP application that generates QR Codes based on this library https://github.com/psyon/php-qrcode.

### Table of Contents

+ [Introduction](#Introduction)
+ [Technologies Used](#Technologies)
+ [Installation](#Installation)


### Introduction

This project allows for easy and quick generation of QR Codes. It uses a PHP library to create QR Codes, facilitating integration into different applications.

### Technologies Used

+ PHP 8.1+, PHP8.1-gd
+ [QR Code Library](https://github.com/psyon/php-qrcode)

### Installation

+ PHP8.1-gd

#### Linux based on Debian

Update your system:

```
sudo apt update && sudo apt upgrade -y
```
Install php8.1-gd:
```
sudo apt install php8.1-gd -y
```

#### Options:
`s` - Symbology (type of QR code). One of:
```
    qr
    qr-l
    qr-m
    qr-q
    qr-h
```

`d` - Data. Encode in Shift-JIS for kanji mode.

`w` - Width of image. Overrides `sf` or `sx`.

`h` - Height of image. Overrides `sf` or `sy`.

`sf` - Scale factor. Default is 4.

`sx` - Horizontal scale factor. Overrides `sf`.

`sy` - Vertical scale factor. Overrides `sf`.

`p` - Padding. Default is 0.

`pv` - Top and bottom padding. Default is value of `p`.

`ph` - Left and right padding. Default is value of `p`.

`pt` - Top padding. Default is value of `pv`.

`pl` - Left padding. Default is value of `ph`.

`pr` - Right padding. Default is value of `ph`.

`pb` - Bottom padding. Default is value of `pv`.

`bc` - Background color in `#RRGGBB` format.

`fc` - Foreground color in `#RRGGBB` format.

`md` - Module density. A number between 0 and 1. Default is 1.

`wq` - Width of quiet area units. Default is 1. Use 0 to suppress quiet area.

`wm` - Width of narrow modules and spaces. Default is 1.
