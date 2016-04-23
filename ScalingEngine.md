# Introduction #

The automatic scaling is implemented using the algorithm proposed by W.J. Dixon and R.A. Kronmal (University of California, Los Angeles) in their publication _The Choice of Origin and Scale for Graphs_ (1965). It improves on ideas formulated by T. Giammo (Space Technology Laboratories, Inc., Redondo Beach, California) in his publication _A Mathematical Method for the Automatic Scaling of a Function_ (1964). Hence the phrase _using space technology_ on the project homepage.

Further improvement on the engine has been done by Michael Mayer (University of Berne, Switzerland).

# Parameter translation #
|**Paper**|**mtChart**|**Description**|
|:--------|:----------|:--------------|
|S        |$DivisionCount/$nint|Number of intervals on the axis, equals (marks minus one)|
|A        |$VMin (Before calculation)/$A|Minimum value on the plot|
|B        |$VMax (Before calculation)/$B|Maximum value on the plot|
|R        |$DataRange/$R|Range of all values, equals ($VMax - $VMin)|
|a        |$VMin/$a   |Minimum value for the scale|
|b        |$VMax/$b   |Maximum value for the scale|
|s        |$DivisionWidth/$DivisionRatio|Ratio of values/divisions|

# Set definition #
```
$p = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
```

The problem lies with division counts like 4 where we would like to see 0.25-values.