class Signature{
    canvasElement = null;
    constructor(canvasElement)
    {
        this.canvasElement = canvasElement;
    }

    createSignature(options)
    {
        const width = options.width || 500;
        const height = options.height || 300;
        const bgColor = options.background || 'beige';
        const lineColor = options.lineColor || '#000';
        var is_writing = false;

        this.canvasElement.setAttribute('width', width);
        this.canvasElement.setAttribute('height', height);
        this.canvasElement.style.cssText = `background-color: ${bgColor}`;

        const context = this.canvasElement.getContext('2d');
        context.beginPath();

        this.canvasElement.onmousedown = (e) => {
            is_writing = true;
        }

        this.canvasElement.onmouseup = (e) => {
            is_writing = false;
        }

        this.canvasElement.onmousemove = (e) => {
            if(is_writing) {
                context.lineTo(e.offsetX, e.offsetY);
                context.stroke();
                context.strokeStyle = lineColor;
            }
            else{
                context.closePath();
            }
        }
    }

    clearSignature()
    {
       const canvas = this.canvasElement.getContext('2d');
       canvas.clearRect(0, 0, this.canvasElement.width, this.canvasElement.height);
       return canvas.beginPath();
    }

    getImageFromSignature()
    {
        return this.canvasElement.toDataURL('image/png');
    }
}