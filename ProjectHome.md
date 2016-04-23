**mtChart** is a fork of [pChart](http://pchart.sourceforge.net/index.php) (Created by [Jean-Damien Pogolotti](http://sunyday.net/)). Its aim is to create a PHP library for producing nicer looking charts than the competition...

**mtChart**
  * is based on pChart 1.27d but no longer compatible: While the main principles of operations remain the same, methods and parameters have changed
  * aims to be cleanly object oriented and shipping with sensible defaults
  * includes the free [DejaVu](http://dejavu-fonts.org/wiki/index.php?title=Main_Page) fonts
  * offers some minor improvements over pChart: Tick intervals, reworked scaling engine _using space technology_, vertical lines, improved date handling...
  * uses only standard GD library tools which are already shipping with PHP

**Main differences between mtChart and pChart**
  * Only one include file: mtChart.php (Contains all the functionality of the former pChart.class, pData.class, pCache.class)
  * The pData object is now included within the mtChart class and found automatically by the drawing functions. Which means: Yes, boring getData() and getDataDescription-calls are no longer necessary.
  * Parameters use NULL instead of -1 for absent values

If you need help to switch from pChart to mtChart, please have a look at the [pChartMigrationGuide](pChartMigrationGuide.md).

**Samples**

![http://img26.imageshack.us/img26/3826/simplep.png](http://img26.imageshack.us/img26/3826/simplep.png)

A simple plot.

![http://img193.imageshack.us/img193/1613/example23.png](http://img193.imageshack.us/img193/1613/example23.png)

A stacked bar plot with transparent bars and background gradients.

![http://img195.imageshack.us/img195/1209/example26.png](http://img195.imageshack.us/img195/1209/example26.png)

A filled area plot, also with transparency and background gradients.

Development sponsored by [METEOTEST](http://www.meteotest.ch) [![](http://weblib.meteotest.ch/img/meteotest.gif)](http://www.meteotest.ch)