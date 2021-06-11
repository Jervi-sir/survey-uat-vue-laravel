
<h1 align="center">Survey for University</h1>

<div align="center">
   Front and Back end for Survey participants
</div>

<div align="center">
  <h3>
    <a href="https://sondage-uat.netlify.app/" target="_blank">
      App 
    </a>
    <span> | </span>
    <a href="https://survey-uat.herokuapp.com/" target="_blank">
      Server 
    </a>
  </h3>
</div>


## Project setup

Over All, the project was about gathering Phone-numbers of participants for the survey. 
The Vue front is connected to a backend, with a token generated 


> **Time spent:** Thursday 10 june 2021 to 11 june 2021, meaning 12 hours the whole night.

## Path
```
1. Spent few minutes to decide which technologies I should use, which made me choose Vuejs coupled with Laravel as a backend API

2. Built Laravel API with migration and controllers.

3. Decided which template design I should go with, which is a portrait design that feels like an academic paper

4. Spent good amount of hours to use Tailwind as a templating framework, but in the end I prefered to abort it, and used it just for Structuring the front, the rest was made with a scratch coded CSS

5. Building Connection of the Vue front with Laravel API, note that there is only one query; of Post requested with an Authorization header, 
==>(if you read this, this key is hard coded, I would like you find it from the Netlify link, not from here, if you did, then contact me I ve put my phone number there, Enjoy)

6. Dealing with errors caught by Vue from Api response, and their css
200: Success,
275: - error - Choice NULL,
276: - error - Name NULL,
277: - error - Phone number NULL,
278: - error - Phone number no valid,
279: - error - Name contains symboles,
280: - error - Name small,

7. Deploy vue to Netlify, and Laravel to Heroku
```
## Difficulties

```
1. it's was complicated to set up server connection like bruh
2. also the deployment in Heroku also a bruh
3. deploy vue to netlify
```

## Solutions

```
1. for the connection, in Laravel you should always put your router in api routes, then in vue just use axios,
2. also in axios, since the deploy will be to netlify, pls put ur api link to https, just do it
3. to deploy vue to Netlify, you should run an npm build terminal, then deploy the generated dist folder
4. for Heroku, things go smooth until you face issues for database connections
here is a link how it got solved : https://youtu.be/639Pe0PpVLQ
```

## My experience with it
```
I had a bare image about vuejs connected with laravel throught api, but god bless ppl of internet, things went smooth
```

## Goals
```
Since the project was a bit of a hurry, I must redo it again but with a total focus
```

## Demonstration

<p align="center">
    <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/Jervi-sir/survey-uat-vuejs/main/screenshot1.png" width="400"></a>
</p>




## Sources
Laravel, VueJs [Youtube Video](https://www.youtube.com/watch?v=0rpcIvG-P0c&list=PLMWEEzYqZ0em475gWK2uHCbrPwtpeUj7Q&index=8).
<br>
Heroku Deploy [Dev Article](https://dev.to/safventure/deploy-laravel-application-with-database-to-heroku-l50).
<br>
Heroku DB  [Youtube Video](https://youtu.be/639Pe0PpVLQ).
<br>
Netlify Deploy [Yotube Video](https://www.youtube.com/watch?v=W2lGxvNs2KM&t=304s).
<br>
Me [Jervi](https://gacem.netlify.com).