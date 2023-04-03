<!DOCTYPE html>
<html>
<head>
    <title>How to Create Multi Language Website in Laravel</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">

        <h1 class="text-center">How to Create Multi Language Website in Laravel</h1>
        <br>
        <div class="row">
            <div class="col-md-4 text-center"></div>
            <div class="col-md-4 text-center">
                <strong>Select Language: </strong>
                <select class="form-control changeLang">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                    <option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>Spanish</option>
                </select>
            </div>
        </div>
        <div class="col-md-4 text-center"></div>
        <br>
        <h1 class="text-center">{{ __('messages.title') }}</h1>

    </div>
</body>

<script type="text/javascript">

    var url = "{{ route('changeLang') }}";

    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });

</script>
</html>
