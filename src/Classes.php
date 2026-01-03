<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        class Person {
            #firstname;
            #lastname;

            constructor(firstname, lastname) {
                this.#firstname = firstname;
                this.#lastname = lastname;
            }
            get firstname() {
                return this.#firstname;
            }
            set firstname(firstname) {
                this.#firstname = firstname;
            }
            get lastname() {
                return this.#lastname;
            }
            set lastname(lastname) {
                this.#lastname = lastname;
            }

            greet() {
                console.log("Hi there!");
            }
            compliment(name, object) {
                return "That's a wonderful " + object + ", " + name;
            }

        }
        let p = new Person("Maaike", "van Putten");
        console.log(p.firstname);
        p.greet();
        let compliment = p.compliment("Harry", "hat");
        console.log(compliment);
    </script>

</head>

<body>

</body>

</html>