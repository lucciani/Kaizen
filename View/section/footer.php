<footer>
    <div class="">
        <p class="pull-right">CashGCOP a Bootstrap 3 template. |
            <span class="lead"> <i class="fa fa-paw"></i> CashGCOP</span>
        </p>
    </div>
    <div class="clearfix"></div>
</footer>
<script src="js/bootstrap.min.js"></script>

<!-- gauge js -->
<script type="text/javascript" src="js/gauge/gauge.min.js"></script>
<script type="text/javascript" src="js/gauge/gauge_demo.js"></script>
<!-- chart js -->
<script src="js/chartjs/chart.min.js"></script>
<!-- bootstrap progress js -->
<script src="js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="js/icheck/icheck.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="js/moment.min.js"></script>
<script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
<script src="js/custom.js"></script>

<!-- flot js -->
<!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
<script type="text/javascript" src="js/flot/jquery.flot.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>
<script type="text/javascript" src="js/flot/date.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>
<script type="text/javascript" src="js/flot/curvedLines.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>
<!-- Datatables -->
<script src="js/datatables/js/jquery.dataTables.js"></script>
<script src="js/datatables/tools/js/dataTables.tableTools.js"></script>
<!-- dashbord linegraph -->
<script>
    var doughnutData = [
        {
            value: 30,
            color: "#455C73"
        },
        {
            value: 30,
            color: "#9B59B6"
        },
        {
            value: 60,
            color: "#BDC3C7"
        },
        {
            value: 100,
            color: "#26B99A"
        },
        {
            value: 120,
            color: "#3498DB"
        }
    ];
    var myDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(doughnutData);
</script>
<!-- /dashbord linegraph -->
<!-- datepicker -->
<script>
    NProgress.done();
</script>
<!-- form validation -->
<script src="js/validator/validator.js"></script>
<script>
// initialize the validator function
    validator.message['date'] = 'not a real date';

// validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required')
            .on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });

// bind the validation to the form submit event
//$('#send').click('submit');//.prop('disabled', true);

    $('form').submit(function (e) {
        e.preventDefault();
        var submit = true;
        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
            submit = false;
        }

        if (submit)
            this.submit();
        return false;
    });

    /* FOR DEMO ONLY */
    $('#vfields').change(function () {
        $('form').toggleClass('mode2');
    }).prop('checked', false);

    $('#alerts').change(function () {
        validator.defaults.alerts = (this.checked) ? false : true;
        if (this.checked)
            $('form .alert').remove();
    }).prop('checked', false);
</script>
<!-- form wizard -->
<script type="text/javascript" src="js/wizard/jquery.smartWizard.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // Smart Wizard 	
        $('#wizard').smartWizard();

        function onFinishCallback() {
            $('#wizard').smartWizard('showMessage', 'Finish Clicked');
            //alert('Finish Clicked');
        }
    });

    $(document).ready(function () {
        // Smart Wizard	
        $('#wizard_verticle').smartWizard({
            transitionEffect: 'slide'
        });

    });
</script>
<!-- daterangepicker -->
<script type="text/javascript" src="js/moment.min2.js"></script>
<!-- input mask -->
<script src="js/input_mask/jquery.inputmask.js"></script>
<!-- knob -->
<script src="js/knob/jquery.knob.min.js"></script>
<!-- range slider -->
<script src="js/ion_range/ion.rangeSlider.min.js"></script>
<!-- color picker -->
<script src="js/colorpicker/bootstrap-colorpicker.js"></script>
<script src="js/colorpicker/docs.js"></script>

<!-- image cropping -->
<script src="js/cropping/cropper.min.js"></script>
<script src="js/cropping/main2.js"></script>

<script type="text/javascript">
    $('.dataviagem').daterangepicker({
        "locale": {
            "format": "DD-MM-YYYY",
            "separator": " - ",
            "applyLabel": "Confirmar",
            "cancelLabel": "Limpar",
            "fromLabel": "Saída",
            "toLabel": "Chegada",
            "customRangeLabel": "Custom",
            "daysOfWeek": [
                "Dom",
                "Seg",
                "Ter",
                "Qua",
                "Qui",
                "Sex",
                "Sab"
            ],
            "monthNames": [
                "Janeiro",
                "Fevereiro",
                "Março",
                "Abril",
                "Maio",
                "Junho",
                "Julho",
                "Agosto",
                "Setembro",
                "Outubro",
                "Novembro",
                "Dezembro"
            ],
            "firstDay": 1
        },
        "opens": "center"
    }, function (start, end, label) {
        console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
    });
</script>

<script type="text/javascript">
    $('#dataconsulta').daterangepicker({
        "locale": {
            "format": "DD-MM-YYYY",
            "separator": " - ",
            "applyLabel": "Confirmar",
            "cancelLabel": "Limpar",
            "fromLabel": "Saída",
            "toLabel": "Chegada",
            "customRangeLabel": "Custom",
            "daysOfWeek": [
                "Dom",
                "Seg",
                "Ter",
                "Qua",
                "Qui",
                "Sex",
                "Sab"
            ],
            "monthNames": [
                "Janeiro",
                "Fevereiro",
                "Março",
                "Abril",
                "Maio",
                "Junho",
                "Julho",
                "Agosto",
                "Setembro",
                "Outubro",
                "Novembro",
                "Dezembro"
            ],
            "firstDay": 1
        },
        "opens": "center"
    }, function (start, end, label) {
        console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
    });
</script>

<script>
    $('#dataind').daterangepicker({
        "singleDatePicker": true,
        "locale": {
            "format": "DD-MM-YYYY",
            "separator": " - ",
            "applyLabel": "Confirmar",
            "cancelLabel": "Limpar",
            "fromLabel": "Saída",
            "toLabel": "Chegada",
            "customRangeLabel": "Custom",
            "daysOfWeek": [
                "Dom",
                "Seg",
                "Ter",
                "Qua",
                "Qui",
                "Sex",
                "Sab"
            ],
            "monthNames": [
                "Janeiro",
                "Fevereiro",
                "Março",
                "Abril",
                "Maio",
                "Junho",
                "Julho",
                "Agosto",
                "Setembro",
                "Outubro",
                "Novembro",
                "Dezembro"
            ],
            "firstDay": 1
        },
        "opens": "center"
    }, function (start, end, label) {
        console.log("New date range selected: ' + start.format('DD-MM-YYYY') + ' to ' + end.format('DD-MM-YYYY') + ' (predefined range: ' + label + ')");
    });
</script>
<script>
    $('#datalimite').daterangepicker({
        "singleDatePicker": true,
        "locale": {
            "format": "DD-MM-YYYY",
            "separator": " - ",
            "applyLabel": "Confirmar",
            "cancelLabel": "Limpar",
            "fromLabel": "Saída",
            "toLabel": "Chegada",
            "customRangeLabel": "Custom",
            "daysOfWeek": [
                "Dom",
                "Seg",
                "Ter",
                "Qua",
                "Qui",
                "Sex",
                "Sab"
            ],
            "monthNames": [
                "Janeiro",
                "Fevereiro",
                "Março",
                "Abril",
                "Maio",
                "Junho",
                "Julho",
                "Agosto",
                "Setembro",
                "Outubro",
                "Novembro",
                "Dezembro"
            ],
            "firstDay": 1
        },
        "opens": "center"
    }, function (start, end, label) {
        console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
    });
</script>
<script>
    $('#datafixo').daterangepicker({
        "singleDatePicker": true,
        "locale": {
            "format": "DD-MM-YYYY",
            "separator": " - ",
            "applyLabel": "Confirmar",
            "cancelLabel": "Limpar",
            "fromLabel": "Saída",
            "toLabel": "Chegada",
            "customRangeLabel": "Custom",
            "daysOfWeek": [
                "Dom",
                "Seg",
                "Ter",
                "Qua",
                "Qui",
                "Sex",
                "Sab"
            ],
            "monthNames": [
                "Janeiro",
                "Fevereiro",
                "Março",
                "Abril",
                "Maio",
                "Junho",
                "Julho",
                "Agosto",
                "Setembro",
                "Outubro",
                "Novembro",
                "Dezembro"
            ],
            "firstDay": 1
        },
        "opens": "center"
    }, function (start, end, label) {
        console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
    });
</script>
<!-- /datepicker -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#single_cal1').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_1"
        }, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal2').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_2"
        }, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal3').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_3"
        }, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal4').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_4"
        }, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#reservation').daterangepicker(null, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
</script>
<!-- /datepicker -->
<!-- input_mask -->
<script>
    $(document).ready(function () {
        $(":input").inputmask();
    });
</script>
<!-- /input mask -->
<!-- ion_range -->
<script>
    $(function () {
        $("#range_27").ionRangeSlider({
            type: "double",
            min: 1000000,
            max: 2000000,
            grid: true,
            force_edges: true
        });
        $("#range").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 0,
            max: 5000,
            from: 1000,
            to: 4000,
            type: 'double',
            step: 1,
            prefix: "$",
            grid: true
        });
        $("#range_25").ionRangeSlider({
            type: "double",
            min: 1000000,
            max: 2000000,
            grid: true
        });
        $("#range_26").ionRangeSlider({
            type: "double",
            min: 0,
            max: 10000,
            step: 500,
            grid: true,
            grid_snap: true
        });
        $("#range_31").ionRangeSlider({
            type: "double",
            min: 0,
            max: 100,
            from: 30,
            to: 70,
            from_fixed: true
        });
        $(".range_min_max").ionRangeSlider({
            type: "double",
            min: 0,
            max: 100,
            from: 30,
            to: 70,
            max_interval: 50
        });
        $(".range_time24").ionRangeSlider({
            min: +moment().subtract(12, "hours").format("X"),
            max: +moment().format("X"),
            from: +moment().subtract(6, "hours").format("X"),
            grid: true,
            force_edges: true,
            prettify: function (num) {
                var m = moment(num, "X");
                return m.format("Do MMMM, HH:mm");
            }
        });
    });
</script>
<!-- /ion_range -->
<!-- knob -->
<script>
    $(function ($) {

        $(".knob").knob({
            change: function (value) {
                //console.log("change : " + value);
            },
            release: function (value) {
                //console.log(this.$.attr('value'));
                console.log("release : " + value);
            },
            cancel: function () {
                console.log("cancel : ", this);
            },
            /*format : function (value) {
             return value + '%';
             },*/
            draw: function () {

                // "tron" case
                if (this.$.data('skin') == 'tron') {

                    this.cursorExt = 0.3;

                    var a = this.arc(this.cv) // Arc
                            ,
                            pa // Previous arc
                            , r = 1;

                    this.g.lineWidth = this.lineWidth;

                    if (this.o.displayPrevious) {
                        pa = this.arc(this.v);
                        this.g.beginPath();
                        this.g.strokeStyle = this.pColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                        this.g.stroke();
                    }

                    this.g.beginPath();
                    this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
                    this.g.stroke();

                    this.g.lineWidth = 2;
                    this.g.beginPath();
                    this.g.strokeStyle = this.o.fgColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                    this.g.stroke();

                    return false;
                }
            }
        });

        // Example of infinite knob, iPod click wheel
        var v, up = 0,
                down = 0,
                i = 0,
                $idir = $("div.idir"),
                $ival = $("div.ival"),
                incr = function () {
                    i++;
                    $idir.show().html("+").fadeOut();
                    $ival.html(i);
                },
                decr = function () {
                    i--;
                    $idir.show().html("-").fadeOut();
                    $ival.html(i);
                };
        $("input.infinite").knob({
            min: 0,
            max: 20,
            stopper: false,
            change: function () {
                if (v > this.cv) {
                    if (up) {
                        decr();
                        up = 0;
                    } else {
                        up = 1;
                        down = 0;
                    }
                } else {
                    if (v < this.cv) {
                        if (down) {
                            incr();
                            down = 0;
                        } else {
                            down = 1;
                            up = 0;
                        }
                    }
                }
                v = this.cv;
            }
        });
    });
</script>
