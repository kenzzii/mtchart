<?php
/**
 * Example18 : Missing values
 *
 * Taken from the pChart example library
 *
 * @link http://pchart.sourceforge.net/screenshots.php
 */

// Standard includes
include('../mtChart.php');

// Dataset definition
$Test = new mtChart(700,230);
$Test->addPoint(array(2,5,7,"",NULL,5,6,4,8,4,"",2,5,6,4,5,6,7,6),"Serie1");
$Test->addPoint(array(-1,-3,-1,-2,-4,-1,"",-4,-5,-3,-2,-2,-3,-3,-5,-4,-3,-1,""),"Serie2");
$Test->addAllSeries();
$Test->setAbsciseLabelSerie();
$Test->setSerieName("Raw #1","Serie1");
$Test->setSerieName("Raw #2","Serie2");
$Test->SetYAxisName("Response time");
$Test->SetXAxisName("Sample #ID");

// Initialise the graph
$Test->setFontProperties('DejaVuSansCondensed',8);
$Test->setGraphArea(55,30,585,185);
$Test->drawFilledRoundedRectangle(7,7,693,223,5,240,240,240);
$Test->drawRoundedRectangle(5,5,695,225,5,230,230,230);
$Test->drawGraphArea(255,255,255,TRUE);
$Test->drawScale(SCALE_NORMAL,150,150,150,TRUE,0,2,TRUE);
$Test->drawGrid(4,TRUE,230,230,230,50);

// Draw the 0 line
$Test->setFontProperties('DejaVuSansCondensed',6);
$Test->drawTreshold(0,143,55,72,TRUE,TRUE);

// Draw the line graph
$Test->RemoveSerie("Serie2");
$Test->drawFilledLineGraph(60,TRUE);

// Draw the curve graph
$Test->RemoveSerie("Serie1");
$Test->AddSerie("Serie2");
$Test->setShadowProperties(2,2,200,200,200,50);
$Test->drawCubicCurve();
$Test->drawPlotGraph(3,2,255,255,255);
$Test->clearShadow();

// Finish the graph
$Test->setFontProperties('DejaVuSansCondensed',8);
$Test->drawLegend(600,30,255,255,255);
$Test->setFontProperties('DejaVuSansCondensed',10);
$Test->drawTitle(50,22,"Example 18",50,50,50,585);
$Test->Stroke();