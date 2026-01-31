// 1. Number
let age = 21;
let price = 99.99;
console.log("Number:", age, price);

// 2. String
let name = "JavaScript";
let greeting = `Hello, ${name}`;
console.log("String:", greeting);

// 3. Boolean
let isStudent = true;
let isLoggedIn = false;
console.log("Boolean:", isStudent, isLoggedIn);

// 4. Undefined
let x;
console.log("Undefined:", x);

// 5. Null
let y = null;
console.log("Null:", y);

// 6. BigInt
let bigNumber = 123456789012345678901234567890n;
console.log("BigInt:", bigNumber);

// 7. Symbol
let sym1 = Symbol("id");
let sym2 = Symbol("id");
console.log("Symbol:", sym1 === sym2); // false

// 8. Object
let person = {
    name: "Rahul",
    age: 20,
    city: "Delhi"
};
console.log("Object:", person);

// 9. Array (Special type of Object)
let marks = [85, 90, 78, 92];
console.log("Array:", marks);

// 10. Function (Special type of Object)
function add(a, b) {
    return a + b;
}
console.log("Function:", add(5, 3));

// 11. Date Object
let today = new Date();
console.log("Date:", today);

// 12. Type checking using typeof
console.log("Type of age:", typeof age);
console.log("Type of name:", typeof name);
console.log("Type of isStudent:", typeof isStudent);
console.log("Type of x:", typeof x);
console.log("Type of y:", typeof y); // object (JS quirk)
console.log("Type of bigNumber:", typeof bigNumber);
console.log("Type of sym1:", typeof sym1);
console.log("Type of person:", typeof person);
console.log("Type of marks:", typeof marks);
console.log("Type of add:", typeof add);