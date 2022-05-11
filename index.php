<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assinatura digital</title>
    <style>
        body{
            background-color: #000;
        }
        .signature-container
        {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .signature-container .signature-wrapper{
            width: fit-content;
        }

        .signature-container .signature-wrapper .btn-area
        {
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 30px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="signature-container">
        <div class="signature-wrapper">
            <canvas id="signature" style="background:beige"></canvas>
            <div class="btn-area">
                <button class="btn">Limpar</button>
                <button class="image">Imagem</button>
            </div>
        </div>
    </div>


    <script src="./Signature.js"></script>
    <script>
        window.onload = function () {
            const canvas = document.querySelector('#signature');
            const btn = document.querySelector('.btn');
            const image = document.querySelector('.image');

            const signature = new Signature(canvas);

            //Options for signature
            signature.createSignature({
                width: 500,
                height: 300,
                background: 'beige',
                lineColor: 'blue'
            });

            //Click event for button clear current signature
            btn.onclick = ()=>{
                signature.clearSignature();
            }

            image.onclick = () => {
                console.log(signature.getImageFromSignature());
            }
        }
    </script>
</body>
</html>