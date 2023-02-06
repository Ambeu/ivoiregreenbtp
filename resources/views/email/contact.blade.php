<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container" style="background-color: #edf0f4;">
    <div style="text-align:center">
        <a href="/">
            <img src="http://reservations.projects.digitmoid.com/img/LOGO-01.png"
                 alt="Logo C'ORIGINAL" height="100" class="CToWUd">
        </a>
    </div>
    <div style="width:524px;margin:0 auto;font-size:18px;background:#fff;border-top:3px solid #7edb27;padding:50px">
        <div>
            <div style="margin-bottom:20px">
                <h4>Bonjour IVOIRE GREEN BTP <br></h4>
                <p>
                    Vous recevez ce message car un visiteur vient de vous ecrire
                    veillez trouver les details du message
                </p>
                <h5>Nom complet : <span>{{$contact['nom']}}</span></h5>
                <h5>Email : <span>{{$contact['email']}}</span></h5>
                <h5>Telephone : <span>{{$contact['tel']}}</span></h5>
                <h5>Envoyé il y a : <span>{{$contact['created_at']}}</span></h5>
            </div>
            <hr>
            <div>
                <p>{{$contact['corps']}}</p>
            </div>
            <div>
                Cordialement,<br>
                L'équipe  <span class="il"><a href="/">IVOIRE GREEN BTP</a></span> <br>
                Téléphone:   (+225)
            </div>
        </div>
    </div>
</div>
</body>
</html>
