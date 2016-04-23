# Introduction #

This document provides you with the commonly used steps to migrate from pChart to mtChart.

# Common steps #
  1. Remove all pChart-includes and just include mtChart.php: `include('mtChart/mtChart.php');`
  1. Replace the two instanciation commands for pData and pChart with the one for mtChart only: `$Graph = new mtChart($width, $height);`
  1. Replace all references to the former pData object with references to the mtChart object. I.e. `$Graph->addPoint($value, 'Serie1');`
  1. Remove all calls to the methods `GetData()` and `GetDataDescription()`. I.e. call plotting functions now like this: `$Graph->drawLineGraph('Serie1');`
  1. Check for the new syntax of `drawScale()` if your scale suddenly is on the right side.
  1. Replace font names which are no longer part of the package. The new standard font is now `DejaVusSansCondensed` (8 Pixels).
  1. Replace function argument values `-1` with `NULL`.

This should take care of most of the standard graphing applications.

# Further possible tasks #
  * All class fields are now protected. Direct access is only allowed to the public `$Graph->Image` field where the image handle resides.
  * There are several set/get methods to provide access to certain fields: `setData()/getData(), setDataDescription()/getDataDescription, setAntialiasQuality()` etc.

# Replacing pCache #
The caching system has changed significantly and is now integrated into mtChart. Please refer to the document CachingSystem for implementation information.