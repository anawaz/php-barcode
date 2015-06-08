php-barcode
===========


NEW README TEXT
==========
NEW STUFF:
  * I've stripped out the Codabar format. It threw some exceptions and I did not get around to debugging them.
  * I've amended the script to automatically add the barcode number to the image.
  * I've put the script into a class

Usage: 

```
<img src="/index.php?code=VESICA" alt="testing" />
```
or simply index.php?code=VESICA
 
This will look like <img src="https://app.vesica.ws/tools/barcoder/?code=VESICA" alt="Vesica barcode" />

There is a running demo on http://vesica.ws/tools/barcoder/?code=VESICA

The tool on vesica.ws is freely available for public use.

ORIGINAL README TEXT
========== 

This is adapted from David Tufts' article "How To Create Barcodes in PHP" found at: 
http://davidscotttufts.com/2009/03/31/how-to-create-barcodes-in-php/

This script that generates barcodes in four barcode formats including
Code 128, Code 39, Code 2of5, and Codabar. With a little over 100 lines
of code you have the options of “vertical” or “horizontal” display,
varying barcode heights, and one of four barcode formats. It does require
the GD Library to be installed as a module in PHP.
