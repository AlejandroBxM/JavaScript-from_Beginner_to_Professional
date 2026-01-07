<!DOCTYPE html>
<html>

<head>
    <title>Complete JavaScript Course</title>
    <style>
        .thumb {
            max-height: 100px;
        }
    </style>
</head>

<body>
    <div id="message"></div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

                    let message = document.getElementById("message");
                    if (window.FileReader) {
                        message.innerText = "Good to go!";
                        const input = document.querySelector('input[type="file"]');
                        const output = document.querySelector('.output');
                        
                        input.addEventListener('change', uploadFile);

                        function uploadFile() {

                            const files = event.target.files;
                            console.log('Clear previous output');
                            output.innerHTML = '';
                            
                            console.log('5. Loop through selected files');
                            for (let i = 0; i < files.length; i++) {
                                
                                console.log('6. Set file by index');
                                const file = files[i];
                                
                                console.log("Only process images");
                                if (!file.type.startsWith('image/')) continue;

                                const reader = new FileReader();

                                reader.onload = function(e) {

                                    const img = document.createElement('img');
                                    console.log(img);
                                    img.src = e.target.result;
                                    console.log(img.src);
                                    img.classList.add('thumb');
                                    console.log('output es:', output);
                                    output.appendChild(img);
                                };

                                reader.readAsDataURL(file);
                            }
                        }
                    } else {
                        message.innerText = "No FileReader :(";
                    }
                });
    </script>
    <input type="file" multiple accept="image/*" />
    <div class="output"></div>
    <script>

    </script>

</body>

</html>