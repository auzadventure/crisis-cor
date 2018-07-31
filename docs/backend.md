
## Backend api 

/user 

## User


'''
/api/users 	GET 	

user = { id, name, number }


/api/users 	POST 	
/api/users/:user_id 	GET 	
/api/users/:user_id 	PUT 	
/api/users/:user_id 	DELETE 	
'''

## groups

group = { id, name, members {array} }

/api/groups 	GET 	
/api/groups 	POST   

 	
/api/groups/:user_id 	GET 	
/api/groups/:user_id 	PUT 	
/api/groups/:user_id 	DELETE 	

/api/group/:group_id/add   POST - append user id to members 

params { user_id }

/api/group/:group_id/delete   POST - splice user id from members 

params { user_id } 

## sms 

/api/sms   POST              # send message to all in group 
params { msg: ' ', group_id: '' }   

1. Get all user ID in group 
2. Loop through and sms them 