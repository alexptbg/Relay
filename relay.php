<!DOCTYPE html>
<html lang="en">
<head>
    <title>RELAY SYSTEM</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="description" content="RELAY SYSTEM" />
    <meta name="keywords" content= "RELAY SYSTEM" />
    <meta name="AUTHOR" content="ALEX SOARES | Алекс Соарес" />
    <meta name="MAIL" content="alex@ka-ex.net" />
    <meta name="VERSION" content="1.0" />
    <meta name="REVISION" content="R01" />
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.css" />
    <link type="text/css" rel="stylesheet" href="css/ka-ex.css" />
    <link type="text/css" rel="stylesheet" href="css/relay.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="ico/relay.png" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-migrate.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
    <div class="jumbotron">
        <h1>On/Off Switch</h1>
        <p class="lead">Relay Toggle</p>
    </div>

    <div class="container relays">
  
        <div class="row">
            <div class="col-sm-12">
                <h3>Relay <small>(toggle in</small>&nbsp;&nbsp;<small>
                <select class="selectpicker show-menu-arrow" id="timed" data-style="btn-primary">
                    <option value="2000">2</option>
                    <option value="4000">4</option>
                    <option value="6000">6</option>
                    <option value="8000">8</option>
                </select>&nbsp;seconds)
                </small><span id="restart">Restart RaspBerry</span></h3>
            </div>
        </div>

        <!--Relay 1-->
        <div class="row">
            <div class="col-sm-3">
                <h6>Relay 1</h6>
            </div>
            <div class="col-sm-9">
                <button type="button" class="btn btn-lg btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="r1" data-relay="1">
                    <div class="handle"></div>
                </button>
            </div>
            <!--
            <div class="col-sm-5">
                <button type="button" class="btn btn-lg btn-toggle active" data-toggle="button" aria-pressed="true" autocomplete="off">
                    <div class="handle"></div>
                </button>
            </div>
            -->
        </div>

        <!--Relay 2-->
        <div class="row">
            <div class="col-sm-3">
                <h6>Relay 2</h6>
            </div>
            <div class="col-sm-9">
                <button type="button" class="btn btn-lg btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="r2" data-relay="2">
                    <div class="handle"></div>
                </button>
            </div>
        </div>
  
        <!--Relay 3-->
        <div class="row">
            <div class="col-sm-3">
                <h6>Relay 3</h6>
            </div>
            <div class="col-sm-9">
                <button type="button" class="btn btn-lg btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="r3" data-relay="3">
                    <div class="handle"></div>
                </button>
            </div>
        </div>

        <!--Relay 4-->
        <div class="row">
            <div class="col-sm-3">
                <h6>Relay 4</h6>
            </div>
            <div class="col-sm-9">
                <button type="button" class="btn btn-lg btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="r4" data-relay="4">
                    <div class="handle"></div>
                </button>
            </div>
        </div>
        
        <!--Relay 5-->
        <div class="row">
            <div class="col-sm-3">
                <h6>Relay 5</h6>
            </div>
            <div class="col-sm-9">
                <button type="button" class="btn btn-lg btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="r5" data-relay="5">
                    <div class="handle"></div>
                </button>
            </div>
        </div>
        
        <!--Relay 6-->
        <div class="row">
            <div class="col-sm-3">
                <h6>Relay 6</h6>
            </div>
            <div class="col-sm-9">
                <button type="button" class="btn btn-lg btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="r6" data-relay="6">
                    <div class="handle"></div>
                </button>
            </div>
        </div>
        
        <!--Relay 7-->
        <div class="row">
            <div class="col-sm-3">
                <h6>Relay 7</h6>
            </div>
            <div class="col-sm-9">
                <button type="button" class="btn btn-lg btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="r7" data-relay="7">
                    <div class="handle"></div>
                </button>
            </div>
        </div>

        <!--Relay 8-->
        <div class="row">
            <div class="col-sm-3">
                <h6>Relay 8</h6>
            </div>
            <div class="col-sm-9">
                <button type="button" class="btn btn-lg btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="r8" data-relay="8">
                    <div class="handle"></div>
                </button>
            </div>
        </div>
        
    </div><!-- /.container -->
    <div class="container copyrights">
        <!-- copyrights -->
        <div class="row">
            <div class="col-sm-12">
                <!--<small>test</small>-->
                <span><a href="http://ka-ex.net" target="_blank">KA-E<em class="colored">X&nbsp;</em></a> &copy; <script type="text/javascript">document.write(new Date().getFullYear())</script></span>
            </div>
        </div>
    </div><!-- /.container -->
    <script type="text/javascript">
        $(function() {
            $("button").click( function(e){
                var id = $(this).attr("id");
                e.preventDefault();
                var relay = $(this).data("relay");
                console.log("Relay "+relay);
                var timed = $("#timed option:selected").val();
                console.log("Time "+timed);
                var datastr = "in=1&relay="+relay+"&status=1";
                setTimeout(function(){ $("#"+id).prop("disabled",true);}, 200);
                $.ajax({
                    url: 'scripts/action.php',
                    dataType: 'json',
                    type: 'GET',
                    data: datastr,
                    contentType: 'application/json',
                    success: function(data,textStatus,jQxhr){
                        console.log(data);
                        //reverse
                        setTimeout(function(){
                            var datastr = "in=1&relay="+relay+"&status=0";
                            $.ajax({
                                url: 'scripts/action.php',
                                dataType: 'json',
                                type: 'GET',
                                data: datastr,
                                contentType: 'application/json',
                                success: function(data,textStatus,jQxhr){
                                    console.log(data);
                                    $("#"+id).button('toggle');
                                    $("#"+id).prop("disabled",false);
                                },
                                error: function(jqXhr,textStatus,errorThrown){
                                    console.log(errorThrown);
                                }
                            });
                        }, timed);
                    },
                    error: function(jqXhr,textStatus,errorThrown){
                        console.log(errorThrown);
                    }
                });
            });
            $('#restart').click(function(x) {
                x.preventDefault();
                //restart
                setTimeout(function(){
                    $.ajax({
                        url: 'scripts/reboot.php',
                        dataType: 'json',
                        type: 'GET',
                        contentType: 'application/json',
                        success: function(data,textStatus,jQxhr){
                            console.log(data);
                        },
                        error: function(jqXhr,textStatus,errorThrown){
                            console.log(errorThrown);
                        }
                    });
                }, timed);
            });
        });
    </script>
</body>
</html>
