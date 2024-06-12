<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class KategoriIkanChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']);
        $this->dataset('Jumlah Produksi', 'line', [10, 20, 15, 5, 50, 30, 25, 40, 35, 45, 55, 60])
             ->backgroundColor('rgba(54, 162, 235, 0.2)')
             ->color('rgba(54, 162, 235, 1)')
             ->fill(true);

    }
}
