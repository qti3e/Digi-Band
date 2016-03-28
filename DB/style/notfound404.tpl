<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{$description}">
    <meta name="author" content="AliReza Ghadimi">
    <meta name="keyword" content="{$keyword}">
    <base href="{$base}">
    <link rel="shortcut icon" href="img/favicon.html">
    <title>{$title} | {$title_text}</title>

    <!-- Bootstrap core CSS -->
    <link href="{$style_url}css/bootstrap.min.css" rel="stylesheet">
    <link href="{$style_url}css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="{$style_url}assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{$style_url}css/style.css" rel="stylesheet">
    <link href="{$style_url}css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{$style_url}js/html5shiv.js"></script>
    <script src="{$style_url}js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body-404">

<div class="container">

    <section class="error-wrapper">
        <i class="icon-404"></i>
        <h1>404</h1>
        <h2 dir="ltr">{$notFound}</h2>
        <p dir="ltr" class="page-404">
            {$message}
        </p>
    </section>

</div>


</body>
</html>