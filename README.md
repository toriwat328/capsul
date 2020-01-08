# GA-final-project

## Project Idea - Capsul Manhattan
New York is always changing. This app is for New York photographers community where you can organize your photos based on the neighborhood it was taken using a map of Manhattan that is separated by neighborhoods and the year it was taken. Its kind of like a photography time capsule for each neighborhood. 

## Map Mockup

![Map Mockup](public/img/mockup.png)

## User Stories

#### Non Logged-In User 
* When a user lands on website, they will see a map of Manhattan separated by neighborhoods. 
* When a user clicks on a neighborhood, the neighborhood will be highlighted and a small modal will pop up with the name of the neighborhood, preview of the first 4 photos submitted for that neighborhood and a button that sends them to a show page of all the photos taken in that neighborhood. Ability to like or comment will be turned off. 
* There will be a button in the nav bar for user to sign up or log in.

#### Logged-In User
* When a user signs up or logs in, they land on their profile.
* On the user profile, a user will see all of the photos they have uploaded. There will be a button to upload new photos, where a user can specify what neighborhood the picture was taken, a caption for the picture, and the year it was taken. These photos can also be edited and deleted. 
* A user can also see individual photos in a modal
* There will be a button to go back to the map view which will have the same functionality as the non logged in user but when a user clicks to see more photos from a particular neighborhood. That view will have likes and comments enabled. 
* When a user likes a picture, it will add the picture to the user profile of liked pics and will change the view of the user who the picture belonged to. I would like to have a notification pop up on the profile of the other user who picture was liked or commented on. 

## MVP
* Photos categorized by neighborhood without map, just a page showing each photo
* Users can add photos, edit and delete in there individual profile 
* Sign Up/Log In 

## Stretch Goals
* Custom Map of Manhattan 
* Likes and Comments
* Photo uploader

## Anticipated Stuggles
* Figuring out how build a photo uploader
* Likes and comments view and state
* Creating the map of Manhattan separated by neighborhood

## Languages To Be Used

#### Front-End
Vue.js (new front-end framework that I will teach myself)

#### Back-End 
Laravel Postgres
