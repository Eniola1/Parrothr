/**
 * Notification JS
 * Purpose of Users Notifications
 * Author: Ochiabuto Jideofor
 */
//some variables baseUrl are inherited from the app.js file

// Notification elements
let notifyAlert = document.getElementById("notify");
let parentDiv = document.getElementById('notification-center');
notifyAlert.style.display = "none";
let noNotificationDiv = document.getElementById("noNotifications");
noNotificationDiv.style.display = "block";

// get notifications
async function getNotifications(){
    await $.get(baseUrl+`/notifications/getNotifications`, function(data){
        showNotification(data);
    });
}

// using notification elements to append and display notifications
function showNotification(data) {
    let title;
    let sender;
    let receiver;
    let createdDate;
    parentDiv.innerHTML = '';
    data = JSON.parse(data);
    // return only first-three notifications
    data = data.slice(0, 3);
    data.map(function(element){
        if (element.seen !== 1) {
            let notifyAlert = document.getElementById("notify");
            notifyAlert.style.display = "block";
            noNotificationDiv.style.display = "none";
            title = element.title;
            receiver = element.receiver_name;
            createdDate = moment(element.created_date).fromNow()
            let notificationElement = document.createElement('div');
            notificationElement.className = 'notification'
            notificationElement.innerHTML = `
            <div style="font-size: 0.95rem; color: darkslategrey;">${title} <span style="font-size: 0.8rem;color: grey;"> ${createdDate.toString()}</span></div>
            `
            parentDiv.appendChild(notificationElement);

            var arr = [title, sender, receiver, createdDate]

            console.log(notificationElement)
            console.log(arr)
        }
    })     
}

// on document ready get notifications
$(document).ready(function(){
    getNotifications;
}); 

// set continious get getnotifications
setInterval(getNotifications, 15000);

// seen notifications and mark seen notifications seen, so as not to display again
function seenNotification(){
    // clearInterval(generateNotifications);

    // on close of the notification dropdown view
    $('#notification-dropdown').on('hidden.bs.dropdown', async function (){
        try {
            await $.post(baseUrl+`/notifications/seenNotifications`, function(response){
                console.log(response);
                parentDiv.innerHTML = '';
                noNotificationDiv.style.display = "block";
            });
            notifyAlert.style.display = "none";
        } catch (error) {
            //
        }
    });
}