This was a sample project on laravel to bookmark the course that is provided 
through API

**************************************************************************

This basically contains two modules

1 . Show the list courses that is fetched from the API in the home page
2 . Provide an option to bookmark a given course and show them in separate page

Notable Features implementations :-

1 . The API is consumed using Gazzle Http
2 . The bookmarking is done with an ajax call
3 . Notifications provided in the form of growl (fading browser push)
4 . Migarations provided to the model table
5 . Blade templating yet to be done

Functional features :-

1 . Some amount of database handling is done
2 . Same course is not allowed to be bookmarked two times
3 . Notifications with different colour provided that appears attop-right

Setup Inforation :-

1 . Setup laravel with virtual hot configurations
2 . Add database credentials to Sample_Course_Bookmarking/.env
3 . Run migrations
4 . Hopefully the site must be up and running

****************************************************************************
