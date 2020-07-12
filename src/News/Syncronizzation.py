import requests
import datetime as dt
import time


"""
Instruction:
pip install requests
"""

#_request = requests.get('https://www.ncovid19.it/News/SyncData.php')
#print _request

# Save the current time to a variable ('t')
t = dt.datetime.now()

while True:
    delta = dt.datetime.now()-t

    if delta.seconds >= (60 * 60):
        file = open("ncovid19.log","a")  
        _request = requests.get('https://www.ncovid19.it/News/SyncData.php')
        file.write(  dt.datetime.now())
        file.write("----------------------------\n") 
        
        file.close() 
        t = dt.datetime.now()
    time.sleep(60)
    # Update 't' variable to