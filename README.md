# Alcatraz
The product is developed as a part of the final year project. It is aimed at providing an architecture and open source code to developers so that they can embed this into their applications to enhance the security. The services provided are top notch and cover the broad spectrum of computer and network security. All the features of the product involve the application of Data Mining and Machine Learning techniques onto the domain of Computer Security.


NEED: The demand for modern tools and techniques to restrict access to applications and services which contain delicate data is increasing exponentially each year. Traditional methods such as PINs, tokens, or passwords fail to keep up with the challenges presented because they can be lost or stolen, which compromises the system security. But even the most powerful cryptographic systems fail to prevent unauthorized access.

AIM: Developers need to adress the issue of security at each module while developing applications involving customer info. The aim of the project is to provide the basic feautures needed to make a system secure. Hence, we have services ranging from Biometric Authentication to Network Intrusion Detection Systems.

Services:
1. Keystroke Biometric Authentication:
Biometric attributes become the most optimal and ideal candidates for authentication since they cannot be stolen, lost or impersonated. 
The most promising approach has been Keystroke biometrics which refers to the habitual patterns or rhythms an individual exhibits while typing on a keyboard input device. Compared to other biometric schemas, keystroke has the primary advantages that: 

No external hardware like scanner or detector is needed. All that is wanted is a keyboard.
The “rhythm” or the pattern of the users is a very reliable statistic.
It can easily be deployed in conjunction with existing authentication systems.
DESIGN AND IMPLEMENTATION


A dataset is created to evaluate the proposed system. A software application validates the entered data at the time of registration and the credentials are implemented to acquire samples from individuals and extract their features. The user has to simply type his username and passwords that they can comfortably type and the rhythm of which they can easily remember. 

The threshold calculation is what makes the model adaptive and different than other existing models and algorithms. The window for error is the space in which he is permitted to cause any errors. This is decided by a method called Leave One-Out-Method (LOOM).



Tech used:
HTML5, jQuery, Bootstrap: For the front end and creation of forms to accept the data from the user
JavaScript: To perform the front end validations and also to gather the key up time from the user
Ajax: To parse the timing data from the frontend JavaScript to the PHP
PHP: To perform all the file operations and IO
R: To build the model and to calculate the threshold.
MySql: To store the user id’s and the passwords and to maintain session information
