 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        // constructor function for person
        function Person(n, a,i,b){
            this.name=n;
            this.age=a;
            this.id=i;
            this.batch=b;
            this.info=function(){
  console.log("Hellow , my name is" + this.name + "age" + this.age +"id" + this.id+ "batch" + this.batch);
            };
        } 

        let person1= new Person("osman", 25, 1288825, 65);
        let person2= new Person("kabir", 26, 1288839, 65);
        let Person3= new Person("asif", 20,  1288840, 65);
        let person4= new Person("Nafiz", 23, 1288842, 65);
        person1.info();

        // console.log(osman);
        // console.log(kabir);
        // console.log(asif);
        // console.log(Nafiz);
    </script>
</body>
</html>   