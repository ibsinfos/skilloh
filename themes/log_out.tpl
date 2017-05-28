<html !DOCTYPE>
<html>

<head>
</head>

<body>

    <div id="fb-root"></div>
    {if $enable_fc eq "1" AND $smarty.session.FB eq "1"} {literal}
    <script src="http://connect.facebook.net/en_US/all.js"></script>
    <script>
        FB.init({
            appId: '{/literal}{$FACEBOOK_APP_ID}{literal}',
            status: true,
            cookie: true,
            xfbml: true
        });
        FB.logout(function(response) {
            window.location = "{/literal}{$baseurl}logout{literal}"
        });
    </script>
    {/literal} {else} {literal}
    <script>
        window.location = "{/literal}{$baseurl}logout{literal}"
    </script>
    {/literal} {/if}

</body>

</html>