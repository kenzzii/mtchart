# Introduction #

mtChart can consume quite a lot of ressources while drawing, so caching can be essential to preserve the health of the server.

The caching uses a combination of script name, data description and the data itself to create a unique MD5 hash. Generated graphs are stored in the `Cache` directory with this hash in name, so the script will simply serve that copy instead of a new one when the three components match.

# Caching workflow #

You can enable caching by calling the function `enableCaching()`. Afterwards both `stroke()` and `render()` will automatically save the result to the caching directory (Defaults to `Cache/` and needs to be writable).

After adding all data and its description to the mtChart object, you can simply call `getFromCache()`. If a cached graph is found, the script will output it and abort. If not, the script will continue.

# Pitfalls #
  * Do not modify the data array once the call to `getFromCache()` has been made, otherwise the cached graph will never be used.
  * If you're using a MVC-framework which depends on your code to return from the view without stopping the script, you will have to pass `FALSE` to `getFromCache()` and evaluate the returning boolean value whether to continue or not.
  * If you pass a relative path to `enableCaching()` for the caching directory, it will be relative to the current file, not relative to the `mtChart.php` file. In most cases it is safer to pass an absolute path.