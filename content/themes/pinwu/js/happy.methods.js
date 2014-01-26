var happy = {
	
  email: function (val) {
    return /^(?:\w+\.?)*\w+@(?:\w+\.)+\w+$/.test(val);
  },
  
  minLength: function (val, length) {
    return val.length >= length;
  },
  
  maxLength: function (val, length) {
    return val.length <= length;
  },
  
  equalRegPassword: function () {
    return ($("#password").val() == $("#r_password").val());
  },
  
  ispassword: function(val){
	var a = /[a-z]/i,
		b = /[0-9]/;
	return a.test(val) && b.test(val) && val.length>=6 && val.length<=20
  },
  
  isMob: function(val){
	return /^1\d{10}$/.test(val)  	
  }
};