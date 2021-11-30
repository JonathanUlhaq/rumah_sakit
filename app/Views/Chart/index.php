<?php
require 'fungsi.php';

?>
<script>
    $(function() {
        "use strict";
        // ============================================================== 
        // Sales overview
        // ============================================================== 
        var chart2 = new Chartist.Bar('.amp-pxl', {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agust', 'Sept', 'Okt', 'Nov', 'Des'],
            series: [
                [<?= $jans; ?>, <?= $febs; ?>, <?= $mars; ?>, <?= $aprs; ?>, <?= $meis; ?>, <?= $juns; ?>, <?= $juls; ?>, <?= $agusts; ?>, <?= $seps; ?>, <?= $okts; ?>, <?= $novs; ?>, <?= $dess; ?>],
                [<?= $janos; ?>, <?= $febos; ?>, <?= $maros; ?>, <?= $apros; ?>, <?= $meios; ?>, <?= $junos; ?>, <?= $julos; ?>, <?= $aggusts; ?>, <?= $sepps; ?>, <?= $oktos; ?>, <?= $novos; ?>, <?= $desos; ?>]
            ]
        }, {
            axisX: {
                // On the x-axis start means top and end means bottom
                position: 'end',
                showGrid: false
            },
            axisY: {
                // On the y-axis start means left and end means right
                position: 'start'
            },
            high: '100',
            low: '0',
            plugins: [
                Chartist.plugins.tooltip()
            ]
        });

        var chart = [chart2];

        // ============================================================== 
        // This is for the animation
        // ==============================================================

        for (var i = 0; i < chart.length; i++) {
            chart[i].on('draw', function(data) {
                if (data.type === 'line' || data.type === 'area') {
                    data.element.animate({
                        d: {
                            begin: 500 * data.index,
                            dur: 500,
                            from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                            to: data.path.clone().stringify(),
                            easing: Chartist.Svg.Easing.easeInOutElastic
                        }
                    });
                }
                if (data.type === 'bar') {
                    data.element.animate({
                        y2: {
                            dur: 500,
                            from: data.y1,
                            to: data.y2,
                            easing: Chartist.Svg.Easing.easeInOutElastic
                        },
                        opacity: {
                            dur: 500,
                            from: 0,
                            to: 1,
                            easing: Chartist.Svg.Easing.easeInOutElastic
                        }
                    });
                }
            });
        }

        // ============================================================== 
        // Our visitor
        // ============================================================== 

        var chart = c3.generate({
            bindto: '#visitor',
            data: {
                columns: [
                    ['Ortopedi', <?= $ortopedis; ?>],
                    ['Kebidanan', <?= $kebidanans; ?>],
                    ['Anak', <?= $anaks; ?>],
                    ['Tumbuh Kembang', <?= $tumbuh_kembangs; ?>],
                    ['Bedah Umum', <?= $bedah_umums; ?>],
                    ['Bedah Saraf', <?= $bedah_sarafs; ?>],
                    ['Bedah Disgestif', <?= $bedah_disgestifs; ?>],
                    ['Paru', <?= $parus; ?>],
                    ['Kulit dan Kelamin', <?= $kulitus; ?>],


                ],

                type: 'donut',
                onclick: function(d, i) {
                    console.log("onclick", d, i);
                },
                onmouseover: function(d, i) {
                    console.log("onmouseover", d, i);
                },
                onmouseout: function(d, i) {
                    console.log("onmouseout", d, i);
                }
            },
            donut: {
                label: {
                    show: false
                },
                title: "Poli ",
                width: 20,

            },

            legend: {
                hide: false
                //or hide: 'data1'
                //or hide: ['data1', 'data2']
            },
            color: {
                pattern: ['#eceff1', '#745af2', '#26c6da', '#1e88e5', '#1ed19c', '#f0f8ff', '#c7c6ff', '#ade0b0', '#d4f0a8']
            }
        });





    });
</script>