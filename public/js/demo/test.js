window.onload = function() {
	var person1 = [{
		name: 'jack',
		age: 30
	}, {
		name: 'mary',
		age: 20
	}, {
		name: 'mark',
		age: 15
	}];

	function createObjectArray(pro) {
		return function(object1, object2) {
			var value1 = object1[pro];
			var value2 = object2[pro];
			if (value1 < value2) {
				return -1;
			} else if (value1 > value2) {
				return 1;
			} else {
				return 0;
			}
		}
	}

	function setValue(a, b) {
		return a + b;
	}

	function add(num1, num2) {
			this.num1 = num1;
			this.num2 = num2;
		}
		//alert(setValue.apply(add,[10,20]));
	person1.sort(createObjectArray('age'));

	//alert(person1[0].valueOf());
	var person2 = {};
	Object.defineProperty(person2, 'name', {
		writable: false,
		value: 'mark'
	});
	person2.name = "jack";
	delete person2.name;

	function createObject(name, age, job) {
		var o = new Object();
		o.name = name;
		o.age = age;
		o.job = job;
		o.sayHi = function() {
			alert(this.name);
		}
		return o;
	}
	var obj = createObject('jack', 24, 'IT');
	//obj.sayHi();
	function Person(name, age, job) {
		this.name = name;
		this.age = age;
		this.job = job;
		this.friends = ['Shery', 'Court'];
		this.sayHi = function() {
			alert(this.name);
		}
	}
	Person.prototype = {
		constructor: Person,
		sayName: function() {
			alert(this.name);
		}

	}
	var person1 = new Person('jack', 23, 'IT');
	person1.friends.push('Vam');
	var person2 = new Person('mary', 33, 'Hr');

	function SuperType() {
		this.protype = true;
	}
	SuperType.prototype.getSuperValue = function() {
		return this.protype;
	}

	function SubType() {
		this.SubProtype = true;
	}

	SubType.prototype = new SuperType();

	SubType.prototype.getSubValue = function() {
		return this.SubProtype;
	}
	var instance = new SubType();


	function factorial(num) {
		if (num <= 1) {
			return num;
		} else {
			return num * arguments.callee(num - 1);
		}
	}

	function createFunctions() {

		var result = new Array();
		for (var i = 0; i < 10; i++) {

			result[i] = getI(i);
		}
		return result;
	}

	var val = createFunctions();

	function getI(i) {
		return i;
	}

	alert(Array.isArray(val));


}