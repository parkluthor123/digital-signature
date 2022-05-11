# Signature Lib - Developed with Javascript

## Documentation

- First Step

const signature = new Signature(canvasElement);

- More Options

signature
    .createSignature({
        width: 500,
        height: 300,
        background: 'beige',
        lineColor: 'blue'
    });

- Clear Signature

signature.clearSignature();

- Get image from signature

signature.getImageFromSignature();

