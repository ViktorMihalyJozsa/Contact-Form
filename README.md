Contact Form

In the script.js file, we use the fetch API to send the form data to the contact.php file. 
The fetch method returns a Promise that contains the response from the server. 
We use the then methods to handle the response, and the alert method to display it to the user. 
If an error occurs, we handle it in the catch method. 
The fetch method has two parameters: the first is the server address, the second is the fetch settings. 
The POST method tells the server that the data is in the body of the request. 
The body property contains the form data, which we create with the FormData constructor. 
The FormData constructor creates an object containing the form elements. 
The constructor parameter is the form element that contains the form elements. 
The form elements are accessed by the name attribute, and the get method retrieves their values. 
When submitting the form, the submit event must be prevented from causing a page refresh. 
This can be done with the preventDefault method.
The event handler is on the form element and listens for the submit event.

The alert method creates a message window that appears in the browser.
In the then method, we get the text content of the response with the response.text() method. 
In the catch method, we handle the error.

The fetch method is available in modern browsers. 
If older browsers need to be supported, the fetch API must be supplemented with polyfills.

Best regards from: VMJ
