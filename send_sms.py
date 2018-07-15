from twilio.rest import Client

# Your Account SID from twilio.com/console
account_sid = "AC01c21eb47743088e3fa9f2c5c9f94cbe"
# Your Auth Token from twilio.com/console
auth_token  = "9d1f9af10847f0f10f470417b685135e"

client = Client(account_sid, auth_token)

message = client.messages.create(
    to="+919542898742", 
    from_="+19514207763",
    body="Hello from Python!")

print(message.sid)