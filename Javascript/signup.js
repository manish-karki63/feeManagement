function validate(form){
				var a = true;
				
				
				/*Checking Name*/
				var name = form.name.value;
				var username = /^[a-zA-Z ]+$/;
				if(name==''||name.length==0)
				{
					a = false;
					form.getElementsByClassName('namemsg')[0].innerHTML = "Name should not be blank";
				}
				else{
					if(!name.match(username))
					{
						a = false;
						form.getElementsByClassName('namemsg')[0].innerHTML = "Name should have only alphabet and space";
					}
				}
				
				/*Checking Exam-roll*/
				var ro = form.roll.value;
				var roll = /^[0-9]+$/;
				if(ro==""||ro.length==0)
				{
					a = false;
					form.getElementsByClassName('roll-msg')[0].innerHTML = "Exam Roll should not be blank";
				}
				
				/*Checking Phone Number*/
				var ph = form.phone.value;
				var pho = /^[0-9]+$/;
				if(ph.length!=10)
				{
					a = false;
					form.getElementsByClassName('phone-msg')[0].innerHTML = "Please Enter 10 digit number";
				}
				else{
					if(!ph.match(pho))
					{
						a = false;
						form.getElementsByClassName('phone-msg')[0].innerHTML = "Invalid format Please re-enter number";
					}
				}
				
				/*Checking Email*/
				var em = form.email.value;
				if(em==""||em.length==0)
				{
					a = false;
					form.getElementsByClassName('email-msg')[0].innerHTML = "Email Should not be Blank";
				}
				
				/*Checking Batch*/
				var batch = form.batch.value;
				if(batch==""||batch.length==0)
				{
					a = false;
					form.getElementsByClassName('batch-msg')[0].innerHTML = "Batch Should not be Blank";
				}
				
				/*Checking Password*/
				var pas = form.password.value;
				var cpas = form.cpassword.value;
				if(pas==""||pas.length==0){
					a = false;
					form.getElementsByClassName('password-msg')[0].innerHTML = "Password Should not be Blank";
				}
				if(cpas==""||cpas.length==0){
					a = false;
					form.getElementsByClassName('cpassword-msg')[0].innerHTML = "Password Should not be Blank";
				}
				
				return a;
			}