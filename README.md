# 🌽 Forumb

Forumb is a personal project which I want to use to learn Laravel + Inertia.js + Vue.js.
With Forumb I want to try and recreate a forum app.

## Todo List

-   Entities:
    -   Forum: a forum is a grouping of posts. A forum can a subforum to another one (this relationship only goes for 1 level).
        -   Fields: Name, Description, Forum_Id, Category_Id.
    -   Category: each forum has a category.
        -   Fields: Name.
-   Only admins can create forums and categories
-   On the admin Index page I should see a grid of categories and a grid of forums with the possibility to create both of them.
-   On a dashboard I should be able to see the list of all categories with their respective forums.
    -   Under each forum I should see all of it's subforums.
    -   I should see the name and description of each forum and on the right side I should see the number of posts in that forum
        -   Eventually I should also see the last post and see the title, the user that created the post and the date of creation
    -   If I click on a category I should see a grid of all the forums in that category
    -   If I click on a forum either from the dashboard or from the category grid I should see a grid of all posts in that forum
        -   On top of the list of posts I should also see a list of all subforums.
        -   In the list I should see
            -   on the left the title, the name of the user that created the post and the date of creation
            -   on the right I should see the number of comments (-1 to exclude the one that created the post)
                -   Eventually I should also see the photo and name of the user that last commented and the date of that last comment
    -   In the post I should see:
        -   On the top the title of the post and the info of the user that created the post
        -   Paginator
        -   Comments
            -   Each comment is divided in two parts:
                -   left side contains info of user that created the post
                -   right side contains the comment itself with:
                    -   on top the date of creation
                    -   the content of the comment
    -   On the dashboard and on the page of a forum I should see a button which lets me create a post. The form of a post is made as:
        -   a select which lets you choose the forum, the select should be a select with various levels with the first level being the category, the second one a forum and the third one a subforum.
        -   the title
        -   a wysiwyg/markdown editor to write the content which would then make up the content of the first comment which will be created by the user
