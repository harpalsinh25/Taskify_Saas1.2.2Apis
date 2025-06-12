<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title> API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.2.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.2.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-reset-password">
                                <a href="#endpoints-POSTapi-reset-password">POST api/reset-password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-roles--id--">
                                <a href="#endpoints-GETapi-roles--id--">Get all roles.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-permissions--id--">
                                <a href="#endpoints-GETapi-permissions--id--">GET api/permissions/{id?}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-settings--variable-">
                                <a href="#endpoints-GETapi-settings--variable-">GET api/settings/{variable}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-master-panel-get-milestones--id--">
                                <a href="#endpoints-GETapi-master-panel-get-milestones--id--">Get the milestones for a specific project with optional filters and pagination.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-master-panel-update-module-dates">
                                <a href="#endpoints-POSTapi-master-panel-update-module-dates">POST api/master-panel/update-module-dates</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-master-panel-tasks-media-delete-multiple">
                                <a href="#endpoints-POSTapi-master-panel-tasks-media-delete-multiple">POST api/master-panel/tasks/media/delete-multiple</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-master-panel-todo-update-status">
                                <a href="#endpoints-POSTapi-master-panel-todo-update-status">Update the completion status of a Todo.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-user-authentication" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user-authentication">
                    <a href="#user-authentication">User Authentication</a>
                </li>
                                    <ul id="tocify-subheader-user-authentication" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-authentication-POSTapi-register">
                                <a href="#user-authentication-POSTapi-register">Register a new user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-authentication-POSTapi-login">
                                <a href="#user-authentication-POSTapi-login">login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-authentication-POSTapi-forgot-password">
                                <a href="#user-authentication-POSTapi-forgot-password">Send Password Reset Link</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-dashboard" class="tocify-header">
                <li class="tocify-item level-1" data-unique="dashboard">
                    <a href="#dashboard">Dashboard</a>
                </li>
                                    <ul id="tocify-subheader-dashboard" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="dashboard-GETapi-master-panel-dashboardList">
                                <a href="#dashboard-GETapi-master-panel-dashboardList">Get Dashboard Data</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="dashboard-GETapi-master-panel-upcoming-birthdays">
                                <a href="#dashboard-GETapi-master-panel-upcoming-birthdays">Get Upcoming Birthdays</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="dashboard-GETapi-master-panel-upcoming-work-anniversaries">
                                <a href="#dashboard-GETapi-master-panel-upcoming-work-anniversaries">Get Upcoming Work Anniversaries</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="dashboard-GETapi-master-panel-members-on-leave">
                                <a href="#dashboard-GETapi-master-panel-members-on-leave">Get Members on Leave (Filtered & Paginated)</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-project-managemant" class="tocify-header">
                <li class="tocify-item level-1" data-unique="project-managemant">
                    <a href="#project-managemant">Project Managemant</a>
                </li>
                                    <ul id="tocify-subheader-project-managemant" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="project-managemant-GETapi-master-panel-projects--id--">
                                <a href="#project-managemant-GETapi-master-panel-projects--id--">Get Project(s)</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="project-managemant-POSTapi-master-panel-projects">
                                <a href="#project-managemant-POSTapi-master-panel-projects">Create a new project</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="project-managemant-PUTapi-master-panel-projects--id-">
                                <a href="#project-managemant-PUTapi-master-panel-projects--id-">Update an existing project.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="project-managemant-DELETEapi-master-panel-projects--id-">
                                <a href="#project-managemant-DELETEapi-master-panel-projects--id-">Delete a project.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="project-managemant-DELETEapi-master-panel-destroy-multiple-projects">
                                <a href="#project-managemant-DELETEapi-master-panel-destroy-multiple-projects">Delete multiple projects.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="project-managemant-POSTapi-master-panel-update_favorite--id-">
                                <a href="#project-managemant-POSTapi-master-panel-update_favorite--id-">Update the favorite status of a project.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="project-managemant-POSTapi-master-panel-projects--id--duplicate">
                                <a href="#project-managemant-POSTapi-master-panel-projects--id--duplicate">Duplicate a project.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-project-media" class="tocify-header">
                <li class="tocify-item level-1" data-unique="project-media">
                    <a href="#project-media">Project Media</a>
                </li>
                                    <ul id="tocify-subheader-project-media" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="project-media-POSTapi-master-panel-projects-upload-media">
                                <a href="#project-media-POSTapi-master-panel-projects-upload-media">Upload media files to a specific project.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="project-media-GETapi-master-panel-projects--id--media">
                                <a href="#project-media-GETapi-master-panel-projects--id--media">Get project media files</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="project-media-DELETEapi-master-panel-media--id-">
                                <a href="#project-media-DELETEapi-master-panel-media--id-">Delete a single media file by ID.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="project-media-POSTapi-master-panel-media-delete-multiple">
                                <a href="#project-media-POSTapi-master-panel-media-delete-multiple">Delete multiple media files by their IDs.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-project-milestones" class="tocify-header">
                <li class="tocify-item level-1" data-unique="project-milestones">
                    <a href="#project-milestones">Project Milestones</a>
                </li>
                                    <ul id="tocify-subheader-project-milestones" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="project-milestones-POSTapi-master-panel-create-milestone">
                                <a href="#project-milestones-POSTapi-master-panel-create-milestone">Create a new milestone for a project</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="project-milestones-PUTapi-master-panel-update-milestone--id-">
                                <a href="#project-milestones-PUTapi-master-panel-update-milestone--id-">Update a milestone.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="project-milestones-DELETEapi-master-panel-delete-milestone--id-">
                                <a href="#project-milestones-DELETEapi-master-panel-delete-milestone--id-">Delete a specific milestone.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-project-status-and-priority" class="tocify-header">
                <li class="tocify-item level-1" data-unique="project-status-and-priority">
                    <a href="#project-status-and-priority">Project status and priority</a>
                </li>
                                    <ul id="tocify-subheader-project-status-and-priority" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="project-status-and-priority-POSTapi-master-panel-save-view-preference">
                                <a href="#project-status-and-priority-POSTapi-master-panel-save-view-preference">Save the user's default view preference for projects.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="project-status-and-priority-PUTapi-master-panel-update-status--id-">
                                <a href="#project-status-and-priority-PUTapi-master-panel-update-status--id-">Update the status of a project.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="project-status-and-priority-PUTapi-master-panel-update-priority--id-">
                                <a href="#project-status-and-priority-PUTapi-master-panel-update-priority--id-">Update the priority of a project.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-project-comments" class="tocify-header">
                <li class="tocify-item level-1" data-unique="project-comments">
                    <a href="#project-comments">Project Comments</a>
                </li>
                                    <ul id="tocify-subheader-project-comments" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="project-comments-POSTapi-master-panel-comments">
                                <a href="#project-comments-POSTapi-master-panel-comments">Add a comment to a model (e.g., project, task) with optional attachments and user mentions.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-task-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="task-management">
                    <a href="#task-management">Task Management</a>
                </li>
                                    <ul id="tocify-subheader-task-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="task-management-GETapi-master-panel-tasks-list-api--id--">
                                <a href="#task-management-GETapi-master-panel-tasks-list-api--id--">List or Get Task(s)

This endpoint returns a paginated list of tasks, or a single task if an ID is provided.
It supports advanced filtering, searching, sorting, and eager loading of related entities
such as users, project, status, priority, reminders, and recurring task details.

If the ID is numeric, it returns a single formatted task object.
If the ID follows the format `user_{id}` or `project_{id}`, it filters tasks belonging
to the specified user or project.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="task-management-POSTapi-master-panel-create-tasks">
                                <a href="#task-management-POSTapi-master-panel-create-tasks">Create a new task</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="task-management-PUTapi-master-panel-update-tasks--id-">
                                <a href="#task-management-PUTapi-master-panel-update-tasks--id-">Update an existing task.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="task-management-DELETEapi-master-panel-delete-tasks--id-">
                                <a href="#task-management-DELETEapi-master-panel-delete-tasks--id-">Delete a specific task by ID.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="task-management-DELETEapi-master-panel-destroy-multiple-tasks">
                                <a href="#task-management-DELETEapi-master-panel-destroy-multiple-tasks">Delete multiple tasks</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="task-management-POSTapi-master-panel-tasks--id--duplicate">
                                <a href="#task-management-POSTapi-master-panel-tasks--id--duplicate">Duplicate a task.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-task-status-and-performance" class="tocify-header">
                <li class="tocify-item level-1" data-unique="task-status-and-performance">
                    <a href="#task-status-and-performance">Task status and performance</a>
                </li>
                                    <ul id="tocify-subheader-task-status-and-performance" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="task-status-and-performance-POSTapi-master-panel-task--id--status--newStatus-">
                                <a href="#task-status-and-performance-POSTapi-master-panel-task--id--status--newStatus-">Update the status of a task.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="task-status-and-performance-POSTapi-master-panel-tasks-save-view-preference">
                                <a href="#task-status-and-performance-POSTapi-master-panel-tasks-save-view-preference">Save User's Default Task View Preference</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="task-status-and-performance-POSTapi-master-panel-tasks-update-priority">
                                <a href="#task-status-and-performance-POSTapi-master-panel-tasks-update-priority">Update Task Priority</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-task-media" class="tocify-header">
                <li class="tocify-item level-1" data-unique="task-media">
                    <a href="#task-media">Task Media</a>
                </li>
                                    <ul id="tocify-subheader-task-media" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="task-media-POSTapi-master-panel-tasks-upload-media">
                                <a href="#task-media-POSTapi-master-panel-tasks-upload-media">Upload media files to a task.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="task-media-GETapi-master-panel-tasks--id--media">
                                <a href="#task-media-GETapi-master-panel-tasks--id--media">Get task media list.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="task-media-DELETEapi-master-panel-tasks-media--id-">
                                <a href="#task-media-DELETEapi-master-panel-tasks-media--id-">Delete a media file from a task.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-task-celender" class="tocify-header">
                <li class="tocify-item level-1" data-unique="task-celender">
                    <a href="#task-celender">Task Celender</a>
                </li>
                                    <ul id="tocify-subheader-task-celender" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="task-celender-GETapi-master-panel-calendar--workspaceId-">
                                <a href="#task-celender-GETapi-master-panel-calendar--workspaceId-">Get calendar tasks data for a workspace.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="task-celender-POSTapi-master-panel-comments-create">
                                <a href="#task-celender-POSTapi-master-panel-comments-create">Add a comment to a model (e.g., task, project).</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-task-comments" class="tocify-header">
                <li class="tocify-item level-1" data-unique="task-comments">
                    <a href="#task-comments">Task Comments</a>
                </li>
                                    <ul id="tocify-subheader-task-comments" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="task-comments-GETapi-master-panel-comments--id-">
                                <a href="#task-comments-GETapi-master-panel-comments--id-">get comments</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="task-comments-PUTapi-master-panel-comments--id-">
                                <a href="#task-comments-PUTapi-master-panel-comments--id-">Update a comment's content.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="task-comments-DELETEapi-master-panel-comments--id-">
                                <a href="#task-comments-DELETEapi-master-panel-comments--id-">Permanently delete a comment and its attachments.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-status-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="status-management">
                    <a href="#status-management">Status Management</a>
                </li>
                                    <ul id="tocify-subheader-status-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="status-management-GETapi-master-panel-status--id--">
                                <a href="#status-management-GETapi-master-panel-status--id--">Get Status List or a Single Status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="status-management-POSTapi-master-panel-statuses">
                                <a href="#status-management-POSTapi-master-panel-statuses">Create a New Status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="status-management-PUTapi-master-panel-statuses--id-">
                                <a href="#status-management-PUTapi-master-panel-statuses--id-">Update an Existing Status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="status-management-DELETEapi-master-panel-statuses--id-">
                                <a href="#status-management-DELETEapi-master-panel-statuses--id-">Delete a Status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="status-management-DELETEapi-master-panel-destroy-multiple-statuses">
                                <a href="#status-management-DELETEapi-master-panel-destroy-multiple-statuses">Delete Multiple Statuses</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-client-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="client-management">
                    <a href="#client-management">Client Management</a>
                </li>
                                    <ul id="tocify-subheader-client-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="client-management-GETapi-master-panel-clients--id--">
                                <a href="#client-management-GETapi-master-panel-clients--id--">List or Retrieve Clients

This endpoint is used to retrieve a list of all clients for the current workspace,
or a single client if an ID is provided. It supports searching, sorting, and pagination.

Requires a `workspace_id` header to identify the current workspace context.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="client-management-POSTapi-master-panel-clients">
                                <a href="#client-management-POSTapi-master-panel-clients">Create a new client.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="client-management-PUTapi-master-panel-clients--client-">
                                <a href="#client-management-PUTapi-master-panel-clients--client-">Update client details.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="client-management-DELETEapi-master-panel-clients--id-">
                                <a href="#client-management-DELETEapi-master-panel-clients--id-">Delete a client.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="client-management-DELETEapi-master-panel-destroy-multiple-clients">
                                <a href="#client-management-DELETEapi-master-panel-destroy-multiple-clients">Delete multiple clients.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-priority" class="tocify-header">
                <li class="tocify-item level-1" data-unique="priority">
                    <a href="#priority">Priority</a>
                </li>
                                    <ul id="tocify-subheader-priority" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="priority-POSTapi-master-panel-priorities">
                                <a href="#priority-POSTapi-master-panel-priorities">Create a new priority</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="priority-PUTapi-master-panel-priorities--priority-">
                                <a href="#priority-PUTapi-master-panel-priorities--priority-">Update an existing priority.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="priority-DELETEapi-master-panel-priorities--priority-">
                                <a href="#priority-DELETEapi-master-panel-priorities--priority-">Delete a priority.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="priority-GETapi-master-panel-priorities--id--">
                                <a href="#priority-GETapi-master-panel-priorities--id--">Get priorities list or a specific priority.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="priority-DELETEapi-master-panel-multiple-delete">
                                <a href="#priority-DELETEapi-master-panel-multiple-delete">Delete multiple priorities.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-user-managemant" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user-managemant">
                    <a href="#user-managemant">User Managemant</a>
                </li>
                                    <ul id="tocify-subheader-user-managemant" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-managemant-POSTapi-master-panel-user">
                                <a href="#user-managemant-POSTapi-master-panel-user">Create a new user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-managemant-PUTapi-master-panel-user--id-">
                                <a href="#user-managemant-PUTapi-master-panel-user--id-">Update user details.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-managemant-DELETEapi-master-panel-user--id-">
                                <a href="#user-managemant-DELETEapi-master-panel-user--id-">Delete a user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="user-managemant-GETapi-master-panel-user--id--">
                                <a href="#user-managemant-GETapi-master-panel-user--id--">Get users list or specific user</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-workspace-managemant" class="tocify-header">
                <li class="tocify-item level-1" data-unique="workspace-managemant">
                    <a href="#workspace-managemant">Workspace Managemant</a>
                </li>
                                    <ul id="tocify-subheader-workspace-managemant" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="workspace-managemant-POSTapi-master-panel-workspace">
                                <a href="#workspace-managemant-POSTapi-master-panel-workspace">Create a new workspace</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="workspace-managemant-PUTapi-master-panel-workspace--id-">
                                <a href="#workspace-managemant-PUTapi-master-panel-workspace--id-">Update an existing workspace</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="workspace-managemant-DELETEapi-master-panel-workspace--id-">
                                <a href="#workspace-managemant-DELETEapi-master-panel-workspace--id-">Delete a workspace</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="workspace-managemant-GETapi-master-panel-workspace--id--">
                                <a href="#workspace-managemant-GETapi-master-panel-workspace--id--">Get a list of workspaces or a specific workspace.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-todos-managemant" class="tocify-header">
                <li class="tocify-item level-1" data-unique="todos-managemant">
                    <a href="#todos-managemant">Todos Managemant</a>
                </li>
                                    <ul id="tocify-subheader-todos-managemant" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="todos-managemant-POSTapi-master-panel-todo">
                                <a href="#todos-managemant-POSTapi-master-panel-todo">Create a new Todo item.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="todos-managemant-PUTapi-master-panel-todo--id-">
                                <a href="#todos-managemant-PUTapi-master-panel-todo--id-">Update an existing Todo</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="todos-managemant-DELETEapi-master-panel-todo--id-">
                                <a href="#todos-managemant-DELETEapi-master-panel-todo--id-">Delete a Todo</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="todos-managemant-GETapi-master-panel-todo--id--">
                                <a href="#todos-managemant-GETapi-master-panel-todo--id--">Display a listing of todos or a specific todo by ID.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-meeting-managemant" class="tocify-header">
                <li class="tocify-item level-1" data-unique="meeting-managemant">
                    <a href="#meeting-managemant">Meeting Managemant</a>
                </li>
                                    <ul id="tocify-subheader-meeting-managemant" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="meeting-managemant-POSTapi-master-panel-meeting">
                                <a href="#meeting-managemant-POSTapi-master-panel-meeting">Create a new meeting</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="meeting-managemant-GETapi-master-panel-meeting--id--">
                                <a href="#meeting-managemant-GETapi-master-panel-meeting--id--">List Meetings</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="meeting-managemant-PUTapi-master-panel-meeting--id-">
                                <a href="#meeting-managemant-PUTapi-master-panel-meeting--id-">Update a Meeting</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="meeting-managemant-DELETEapi-master-panel-meeting--id-">
                                <a href="#meeting-managemant-DELETEapi-master-panel-meeting--id-">Delete a Meeting</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-note-managemant" class="tocify-header">
                <li class="tocify-item level-1" data-unique="note-managemant">
                    <a href="#note-managemant">note Managemant</a>
                </li>
                                    <ul id="tocify-subheader-note-managemant" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="note-managemant-POSTapi-master-panel-note">
                                <a href="#note-managemant-POSTapi-master-panel-note">Create a new note.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="note-managemant-PUTapi-master-panel-note--id-">
                                <a href="#note-managemant-PUTapi-master-panel-note--id-">Update an existing note.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="note-managemant-DELETEapi-master-panel-note--id-">
                                <a href="#note-managemant-DELETEapi-master-panel-note--id-">Delete a Note</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="note-managemant-GETapi-master-panel-note--id--">
                                <a href="#note-managemant-GETapi-master-panel-note--id--">Get All Notes or a Specific Note

This endpoint retrieves either:
- A list of all notes (if no ID is provided), or
- A single note by its ID (if provided).

Notes are filtered by the current workspace and admin context.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-leaverequest-managemant" class="tocify-header">
                <li class="tocify-item level-1" data-unique="leaverequest-managemant">
                    <a href="#leaverequest-managemant">leaverequest Managemant</a>
                </li>
                                    <ul id="tocify-subheader-leaverequest-managemant" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="leaverequest-managemant-POSTapi-master-panel-leaverequest">
                                <a href="#leaverequest-managemant-POSTapi-master-panel-leaverequest">Create a Leave Request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="leaverequest-managemant-GETapi-master-panel-leaverequest--id--">
                                <a href="#leaverequest-managemant-GETapi-master-panel-leaverequest--id--">List Leave Requests (all or by ID)

This API returns either a paginated list of leave requests based on filters or a single leave request if an ID is provided.

Requires authentication. Workspace must be set via header `workspace-id`.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="leaverequest-managemant-PUTapi-master-panel-leaverequest--id-">
                                <a href="#leaverequest-managemant-PUTapi-master-panel-leaverequest--id-">Update Leave Request</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="leaverequest-managemant-DELETEapi-master-panel-leaverequest--id-">
                                <a href="#leaverequest-managemant-DELETEapi-master-panel-leaverequest--id-">Delete a leave request by ID.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: June 12, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-xss-protection: 1; mode=block
x-content-type-options: nosniff
referrer-policy: strict-origin-when-cross-origin
x-frame-options: SAMEORIGIN
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-reset-password">POST api/reset-password</h2>

<p>
</p>



<span id="example-requests-POSTapi-reset-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/reset-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"token\": \"consequatur\",
    \"email\": \"carolyne.luettgen@example.org\",
    \"password\": \"ij-e\\/dl4m\",
    \"password_confirmation\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/reset-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "token": "consequatur",
    "email": "carolyne.luettgen@example.org",
    "password": "ij-e\/dl4m",
    "password_confirmation": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-reset-password">
</span>
<span id="execution-results-POSTapi-reset-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-reset-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-reset-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-reset-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-reset-password" data-method="POST"
      data-path="api/reset-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-reset-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-reset-password"
                    onclick="tryItOut('POSTapi-reset-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-reset-password"
                    onclick="cancelTryOut('POSTapi-reset-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-reset-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/reset-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-reset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-reset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>token</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="token"                data-endpoint="POSTapi-reset-password"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-reset-password"
               value="carolyne.luettgen@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>carolyne.luettgen@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-reset-password"
               value="ij-e/dl4m"
               data-component="body">
    <br>
<p>Must be at least 6 characters. Example: <code>ij-e/dl4m</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-reset-password"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-roles--id--">Get all roles.</h2>

<p>
</p>

<p>Returns a list of all roles available in the system.</p>

<span id="example-requests-GETapi-roles--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/roles/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/roles/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-roles--id--">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;roles&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Admin&quot;,
            &quot;guard_name&quot;: &quot;web&quot;,
            &quot;created_at&quot;: &quot;2024-01-01T12:00:00.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-01-01T12:00:00.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Client&quot;,
            &quot;guard_name&quot;: &quot;client&quot;,
            &quot;created_at&quot;: &quot;2024-01-01T12:00:00.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-01-01T12:00:00.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-roles--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-roles--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-roles--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-roles--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-roles--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-roles--id--" data-method="GET"
      data-path="api/roles/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-roles--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-roles--id--"
                    onclick="tryItOut('GETapi-roles--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-roles--id--"
                    onclick="cancelTryOut('GETapi-roles--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-roles--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/roles/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-roles--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-roles--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-roles--id--"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the . Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-permissions--id--">GET api/permissions/{id?}</h2>

<p>
</p>



<span id="example-requests-GETapi-permissions--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/permissions/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/permissions/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-permissions--id--">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
x-xss-protection: 1; mode=block
x-content-type-options: nosniff
referrer-policy: strict-origin-when-cross-origin
x-frame-options: SAMEORIGIN
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Permission not found.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-permissions--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-permissions--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-permissions--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-permissions--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-permissions--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-permissions--id--" data-method="GET"
      data-path="api/permissions/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-permissions--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-permissions--id--"
                    onclick="tryItOut('GETapi-permissions--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-permissions--id--"
                    onclick="cancelTryOut('GETapi-permissions--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-permissions--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/permissions/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-permissions--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-permissions--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-permissions--id--"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the . Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-settings--variable-">GET api/settings/{variable}</h2>

<p>
</p>



<span id="example-requests-GETapi-settings--variable-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/settings/5" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/settings/5"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-settings--variable-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
x-xss-protection: 1; mode=block
x-content-type-options: nosniff
referrer-policy: strict-origin-when-cross-origin
x-frame-options: SAMEORIGIN
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Settings retrieved successfully&quot;,
    &quot;variable&quot;: &quot;5&quot;,
    &quot;settings&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-settings--variable-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-settings--variable-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-settings--variable-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-settings--variable-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-settings--variable-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-settings--variable-" data-method="GET"
      data-path="api/settings/{variable}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-settings--variable-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-settings--variable-"
                    onclick="tryItOut('GETapi-settings--variable-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-settings--variable-"
                    onclick="cancelTryOut('GETapi-settings--variable-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-settings--variable-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/settings/{variable}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-settings--variable-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-settings--variable-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>variable</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="variable"                data-endpoint="GETapi-settings--variable-"
               value="5"
               data-component="url">
    <br>
<p>Example: <code>5</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-master-panel-get-milestones--id--">Get the milestones for a specific project with optional filters and pagination.</h2>

<p>
</p>



<span id="example-requests-GETapi-master-panel-get-milestones--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/get-milestones/consequatur" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/get-milestones/consequatur"
);

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-get-milestones--id--">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
x-xss-protection: 1; mode=block
x-content-type-options: nosniff
referrer-policy: strict-origin-when-cross-origin
x-frame-options: SAMEORIGIN
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Milestone not found.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-get-milestones--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-get-milestones--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-get-milestones--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-get-milestones--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-get-milestones--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-get-milestones--id--" data-method="GET"
      data-path="api/master-panel/get-milestones/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-get-milestones--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-get-milestones--id--"
                    onclick="tryItOut('GETapi-master-panel-get-milestones--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-get-milestones--id--"
                    onclick="cancelTryOut('GETapi-master-panel-get-milestones--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-get-milestones--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/get-milestones/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization"                data-endpoint="GETapi-master-panel-get-milestones--id--"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-get-milestones--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="GETapi-master-panel-get-milestones--id--"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-get-milestones--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-master-panel-get-milestones--id--"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the . Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-master-panel-update-module-dates">POST api/master-panel/update-module-dates</h2>

<p>
</p>



<span id="example-requests-POSTapi-master-panel-update-module-dates">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/update-module-dates" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"module\": {
        \"type\": \"task\",
        \"id\": 17
    },
    \"start_date\": \"consequatur\",
    \"end_date\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/update-module-dates"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "module": {
        "type": "task",
        "id": 17
    },
    "start_date": "consequatur",
    "end_date": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-update-module-dates">
</span>
<span id="execution-results-POSTapi-master-panel-update-module-dates" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-update-module-dates"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-update-module-dates"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-update-module-dates" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-update-module-dates">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-update-module-dates" data-method="POST"
      data-path="api/master-panel/update-module-dates"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-update-module-dates', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-update-module-dates"
                    onclick="tryItOut('POSTapi-master-panel-update-module-dates');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-update-module-dates"
                    onclick="cancelTryOut('POSTapi-master-panel-update-module-dates');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-update-module-dates"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/update-module-dates</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-update-module-dates"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-update-module-dates"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>module</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="module.type"                data-endpoint="POSTapi-master-panel-update-module-dates"
               value="task"
               data-component="body">
    <br>
<p>Example: <code>task</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>project</code></li> <li><code>task</code></li></ul>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="module.id"                data-endpoint="POSTapi-master-panel-update-module-dates"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
                    </div>
                                    </details>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="POSTapi-master-panel-update-module-dates"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_date"                data-endpoint="POSTapi-master-panel-update-module-dates"
               value="consequatur"
               data-component="body">
    <br>
<p>Temporarily validate as a string. Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-master-panel-tasks-media-delete-multiple">POST api/master-panel/tasks/media/delete-multiple</h2>

<p>
</p>



<span id="example-requests-POSTapi-master-panel-tasks-media-delete-multiple">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/tasks/media/delete-multiple" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"ids\": [
        17
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/tasks/media/delete-multiple"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "ids": [
        17
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-tasks-media-delete-multiple">
</span>
<span id="execution-results-POSTapi-master-panel-tasks-media-delete-multiple" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-tasks-media-delete-multiple"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-tasks-media-delete-multiple"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-tasks-media-delete-multiple" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-tasks-media-delete-multiple">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-tasks-media-delete-multiple" data-method="POST"
      data-path="api/master-panel/tasks/media/delete-multiple"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-tasks-media-delete-multiple', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-tasks-media-delete-multiple"
                    onclick="tryItOut('POSTapi-master-panel-tasks-media-delete-multiple');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-tasks-media-delete-multiple"
                    onclick="cancelTryOut('POSTapi-master-panel-tasks-media-delete-multiple');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-tasks-media-delete-multiple"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/tasks/media/delete-multiple</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-tasks-media-delete-multiple"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-tasks-media-delete-multiple"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ids</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ids[0]"                data-endpoint="POSTapi-master-panel-tasks-media-delete-multiple"
               data-component="body">
        <input type="number" style="display: none"
               name="ids[1]"                data-endpoint="POSTapi-master-panel-tasks-media-delete-multiple"
               data-component="body">
    <br>
<p>Ensure 'ids' is present and an array. The <code>id</code> of an existing record in the media table.</p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-master-panel-todo-update-status">Update the completion status of a Todo.</h2>

<p>
</p>

<p>This endpoint allows the user to update the <code>is_completed</code> status of a specific Todo item by providing its ID and the desired status.</p>

<span id="example-requests-POSTapi-master-panel-todo-update-status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/todo/update-status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"id\": 12,
    \"status\": true,
    \"isApi\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/todo/update-status"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 12,
    "status": true,
    "isApi": true
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-todo-update-status">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Status updated successfully.&quot;,
    &quot;id&quot;: 12,
    &quot;activity_message&quot;: &quot;John Doe marked todo Task Title as Completed&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Todo] 999.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;id&quot;: [
            &quot;The id field is required.&quot;
        ],
        &quot;status&quot;: [
            &quot;The status field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;Detailed error message&quot;,
    &quot;message&quot;: &quot;Todo couldn&#039;t be updated.&quot;,
    &quot;line&quot;: 123,
    &quot;file&quot;: &quot;/path/to/file.php&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-todo-update-status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-todo-update-status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-todo-update-status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-todo-update-status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-todo-update-status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-todo-update-status" data-method="POST"
      data-path="api/master-panel/todo/update-status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-todo-update-status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-todo-update-status"
                    onclick="tryItOut('POSTapi-master-panel-todo-update-status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-todo-update-status"
                    onclick="cancelTryOut('POSTapi-master-panel-todo-update-status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-todo-update-status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/todo/update-status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-todo-update-status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-todo-update-status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="POSTapi-master-panel-todo-update-status"
               value="12"
               data-component="body">
    <br>
<p>The ID of the Todo. Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-master-panel-todo-update-status" style="display: none">
            <input type="radio" name="status"
                   value="true"
                   data-endpoint="POSTapi-master-panel-todo-update-status"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-master-panel-todo-update-status" style="display: none">
            <input type="radio" name="status"
                   value="false"
                   data-endpoint="POSTapi-master-panel-todo-update-status"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Status to set. 1 for completed, 0 for pending. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-master-panel-todo-update-status" style="display: none">
            <input type="radio" name="isApi"
                   value="true"
                   data-endpoint="POSTapi-master-panel-todo-update-status"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-master-panel-todo-update-status" style="display: none">
            <input type="radio" name="isApi"
                   value="false"
                   data-endpoint="POSTapi-master-panel-todo-update-status"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>optional Whether the request is API-based. Example: <code>true</code></p>
        </div>
        </form>

                <h1 id="user-authentication">User Authentication</h1>

    <p>This endpoint allows a user or client to authenticate using email and password. It applies rate limiting and returns a Bearer token upon successful login.</p>

                                <h2 id="user-authentication-POSTapi-register">Register a new user</h2>

<p>
</p>

<p>This endpoint allows a new user to register with first name, last name, email, phone, and password.
The system ensures the email and phone are unique across both users and clients.
Upon successful registration, the user is assigned the &quot;admin&quot; role, an admin record is created, and a token is issued.</p>

<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"first_name\": \"John\",
    \"last_name\": \"ramanandi\",
    \"email\": \"bhurabhai@example.com\",
    \"phone\": \"9876543210\",
    \"password\": \"secret123\",
    \"password_confirmation\": \"secret123\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "John",
    "last_name": "ramanandi",
    "email": "bhurabhai@example.com",
    "phone": "9876543210",
    "password": "secret123",
    "password_confirmation": "secret123"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
            <blockquote>
            <p>Example response (200, Successful Registration):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;User registered successfully&quot;,
    &quot;redirect_url&quot;: &quot;http://localhost:8000/login&quot;,
    &quot;access_token&quot;: &quot;1|ABCDEF1234567890...&quot;,
    &quot;token_type&quot;: &quot;Bearer&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, Validation Failed):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: {
        &quot;email&quot;: [
            &quot;The email has already been taken in users or clients.&quot;
        ],
        &quot;password&quot;: [
            &quot;Password must be at least 6 characters long.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500, Server Error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Something went wrong on the server.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="first_name"                data-endpoint="POSTapi-register"
               value="John"
               data-component="body">
    <br>
<p>The first name of the user. Must not contain numbers. Example: <code>John</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="POSTapi-register"
               value="ramanandi"
               data-component="body">
    <br>
<p>The last name of the user. Must not contain numbers. Example: <code>ramanandi</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-register"
               value="bhurabhai@example.com"
               data-component="body">
    <br>
<p>Must be a valid email and unique across users and clients. Example: <code>bhurabhai@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-register"
               value="9876543210"
               data-component="body">
    <br>
<p>Must be a string of digits and unique among users. Example: <code>9876543210</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-register"
               value="secret123"
               data-component="body">
    <br>
<p>Minimum 6 characters. Example: <code>secret123</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-register"
               value="secret123"
               data-component="body">
    <br>
<p>Must match the password. Example: <code>secret123</code></p>
        </div>
        </form>

                    <h2 id="user-authentication-POSTapi-login">login</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"admin@gmail.com\",
    \"password\": \"123456\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "admin@gmail.com",
    "password": "123456"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;error&quot;: false,
  &quot;message&quot;: &quot;User login successful&quot;,
  &quot;access_token&quot;: &quot;1|X1Y2Z3TOKENEXAMPLE&quot;,
  &quot;token_type&quot;: &quot;Bearer&quot;,
  &quot;account_type&quot;: &quot;user&quot;,
  &quot;role&quot;: &quot;admin&quot;,
  &quot;user&quot;: {
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;John Doe&quot;,
    &quot;email&quot;: &quot;johndoe@example.com&quot;,
    ...
  },
  &quot;redirect_url&quot;: &quot;http://yourapp.com/workspaces/edit/1&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Invalid credentials. Please try again.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;email&quot;: [
            &quot;The email field is required.&quot;
        ],
        &quot;password&quot;: [
            &quot;The password field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (429):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Too many login attempts. Please try again in 60 seconds.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;An unexpected error occurred. Please try again later.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="admin@gmail.com"
               data-component="body">
    <br>
<p>The email address of the account. Example: <code>admin@gmail.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="123456"
               data-component="body">
    <br>
<p>The password for the account. Example: <code>123456</code></p>
        </div>
        </form>

                    <h2 id="user-authentication-POSTapi-forgot-password">Send Password Reset Link</h2>

<p>
</p>

<p>This endpoint sends a password reset link to the given email address
if it belongs to a registered user or client.</p>

<span id="example-requests-POSTapi-forgot-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/forgot-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"user@example.com\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/forgot-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "user@example.com"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-forgot-password">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Password reset link emailed successfully.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;email&quot;: [
            &quot;The email field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Password reset link couldn&#039;t be sent, please check email settings.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Password reset link couldn&#039;t be sent, please configure email settings.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-forgot-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-forgot-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-forgot-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-forgot-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-forgot-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-forgot-password" data-method="POST"
      data-path="api/forgot-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-forgot-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-forgot-password"
                    onclick="tryItOut('POSTapi-forgot-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-forgot-password"
                    onclick="cancelTryOut('POSTapi-forgot-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-forgot-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/forgot-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-forgot-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-forgot-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-forgot-password"
               value="user@example.com"
               data-component="body">
    <br>
<p>The email address of the user or client. Example: <code>user@example.com</code></p>
        </div>
        </form>

                <h1 id="dashboard">Dashboard</h1>

    <p>Retrieves a paginated list of users who have work anniversaries (based on their date of joining) within a specified number of upcoming days.
This endpoint supports filtering, sorting, searching, and pagination.</p>

                                <h2 id="dashboard-GETapi-master-panel-dashboardList">Get Dashboard Data</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint returns a comprehensive dashboard summary for the authenticated user within the selected workspace.
It includes counts and detailed lists of users, clients, projects, tasks, to-dos, meetings, activities, and statuses.</p>

<span id="example-requests-GETapi-master-panel-dashboardList">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/dashboardList" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/dashboardList"
);

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-dashboardList">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;error&quot;: false,
  &quot;message&quot;: &quot;Dashboard data fetched successfully.&quot;,
  &quot;data&quot;: {
    &quot;counts&quot;: {
      &quot;users_count&quot;: 5,
      &quot;clients_count&quot;: 3,
      &quot;projects_count&quot;: 8,
      &quot;tasks_count&quot;: 22,
      &quot;todos_count&quot;: 5,
      &quot;meetings_count&quot;: 2,
      &quot;statuses_count&quot;: 6,
      &quot;activities_count&quot;: 10
    },
    &quot;users&quot;: [...],
    &quot;clients&quot;: [...],
    &quot;projects&quot;: [...],
    &quot;tasks&quot;: [...],
    &quot;todos&quot;: [...],
    &quot;total_todos&quot;: [...],
    &quot;meetings&quot;: [...],
    &quot;auth_user&quot;: {
      &quot;id&quot;: 1,
      &quot;first_name&quot;: &quot;John&quot;,
      &quot;last_name&quot;: &quot;Doe&quot;,
      ...
    },
    &quot;statuses&quot;: [...],
    &quot;activities&quot;: [...]
  }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Missing or invalid workspace-id header.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Unauthorized: User not authenticated.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Workspace not found.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Something went wrong.&quot;,
    &quot;data&quot;: {
        &quot;line&quot;: 123,
        &quot;file&quot;: &quot;app/Http/Controllers/DashboardController.php&quot;,
        &quot;error&quot;: &quot;Exception message here&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-dashboardList" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-dashboardList"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-dashboardList"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-dashboardList" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-dashboardList">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-dashboardList" data-method="GET"
      data-path="api/master-panel/dashboardList"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-dashboardList', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-dashboardList"
                    onclick="tryItOut('GETapi-master-panel-dashboardList');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-dashboardList"
                    onclick="cancelTryOut('GETapi-master-panel-dashboardList');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-dashboardList"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/dashboardList</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-master-panel-dashboardList"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-dashboardList"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="GETapi-master-panel-dashboardList"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-dashboardList"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="dashboard-GETapi-master-panel-upcoming-birthdays">Get Upcoming Birthdays</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint retrieves a list of users within the current workspace whose birthdays are coming up within the next given number of days (default is 30).
It calculates the number of days left for each birthday and includes user details like name, photo, age, and profile link.</p>

<span id="example-requests-GETapi-master-panel-upcoming-birthdays">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/upcoming-birthdays?upcoming_days=15&amp;isApi=1" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/upcoming-birthdays"
);

const params = {
    "upcoming_days": "15",
    "isApi": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-upcoming-birthdays">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Upcoming birthdays fetched successfully.&quot;,
    &quot;data&quot;: {
        &quot;data&quot;: [
            {
                &quot;id&quot;: 5,
                &quot;member&quot;: &quot;John Doe&quot;,
                &quot;dob&quot;: &quot;1995-07-18&quot;,
                &quot;days_left&quot;: 12,
                &quot;age&quot;: 28,
                &quot;photo&quot;: &quot;http://example.com/storage/photos/user5.jpg&quot;,
                &quot;profile_url&quot;: &quot;http://example.com/users/5&quot;
            }
        ],
        &quot;total&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Internal Server Error: Something went wrong.&quot;,
    &quot;data&quot;: [],
    &quot;status_code&quot;: 500
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-upcoming-birthdays" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-upcoming-birthdays"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-upcoming-birthdays"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-upcoming-birthdays" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-upcoming-birthdays">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-upcoming-birthdays" data-method="GET"
      data-path="api/master-panel/upcoming-birthdays"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-upcoming-birthdays', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-upcoming-birthdays"
                    onclick="tryItOut('GETapi-master-panel-upcoming-birthdays');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-upcoming-birthdays"
                    onclick="cancelTryOut('GETapi-master-panel-upcoming-birthdays');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-upcoming-birthdays"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/upcoming-birthdays</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-master-panel-upcoming-birthdays"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-upcoming-birthdays"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="GETapi-master-panel-upcoming-birthdays"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-upcoming-birthdays"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>upcoming_days</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="upcoming_days"                data-endpoint="GETapi-master-panel-upcoming-birthdays"
               value="15"
               data-component="query">
    <br>
<p>Optional. Number of upcoming days to look for birthdays. Defaults to 30. Example: <code>15</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="GETapi-master-panel-upcoming-birthdays" style="display: none">
            <input type="radio" name="isApi"
                   value="1"
                   data-endpoint="GETapi-master-panel-upcoming-birthdays"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-master-panel-upcoming-birthdays" style="display: none">
            <input type="radio" name="isApi"
                   value="0"
                   data-endpoint="GETapi-master-panel-upcoming-birthdays"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Optional. Pass true to get formatted API response. Example: <code>true</code></p>
            </div>
                </form>

                    <h2 id="dashboard-GETapi-master-panel-upcoming-work-anniversaries">Get Upcoming Work Anniversaries</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-master-panel-upcoming-work-anniversaries">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/upcoming-work-anniversaries?search=John&amp;sort=doj&amp;order=ASC&amp;upcoming_days=30&amp;user_id=15&amp;limit=10" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/upcoming-work-anniversaries"
);

const params = {
    "search": "John",
    "sort": "doj",
    "order": "ASC",
    "upcoming_days": "30",
    "user_id": "15",
    "limit": "10",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-upcoming-work-anniversaries">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;rows&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;member&quot;: &quot;Alice Smith 🥳&lt;ul class=&#039;list-unstyled users-list m-0 avatar-group d-flex align-items-center&#039;&gt;&lt;a href=&#039;http://example.com/users/1&#039; target=&#039;_blank&#039;&gt;&lt;li class=&#039;avatar avatar-sm pull-up&#039; title=&#039;Alice Smith&#039;&gt;&lt;img src=&#039;http://example.com/storage/photos/alice.jpg&#039; alt=&#039;Avatar&#039; class=&#039;rounded-circle&#039;&gt;&quot;,
            &quot;wa_date&quot;: &quot;2025-05-19 &lt;span class=&#039;badge bg-success&#039;&gt;Today&lt;/span&gt;&quot;,
            &quot;days_left&quot;: 0
        }
    ],
    &quot;total&quot;: 25
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;order&quot;: [
            &quot;The selected order is invalid. Must be ASC or DESC.&quot;
        ],
        &quot;sort&quot;: [
            &quot;The selected sort field is invalid.&quot;
        ],
        &quot;upcoming_days&quot;: [
            &quot;The upcoming_days must be an integer.&quot;
        ],
        &quot;limit&quot;: [
            &quot;The limit must be a positive integer.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Internal server error. Please try again later.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-upcoming-work-anniversaries" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-upcoming-work-anniversaries"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-upcoming-work-anniversaries"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-upcoming-work-anniversaries" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-upcoming-work-anniversaries">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-upcoming-work-anniversaries" data-method="GET"
      data-path="api/master-panel/upcoming-work-anniversaries"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-upcoming-work-anniversaries', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-upcoming-work-anniversaries"
                    onclick="tryItOut('GETapi-master-panel-upcoming-work-anniversaries');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-upcoming-work-anniversaries"
                    onclick="cancelTryOut('GETapi-master-panel-upcoming-work-anniversaries');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-upcoming-work-anniversaries"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/upcoming-work-anniversaries</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-master-panel-upcoming-work-anniversaries"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-upcoming-work-anniversaries"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="GETapi-master-panel-upcoming-work-anniversaries"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-upcoming-work-anniversaries"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>search</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="search"                data-endpoint="GETapi-master-panel-upcoming-work-anniversaries"
               value="John"
               data-component="query">
    <br>
<p>Optional. Search term to filter users by first name, last name, full name, or date of joining. Example: <code>John</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sort</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sort"                data-endpoint="GETapi-master-panel-upcoming-work-anniversaries"
               value="doj"
               data-component="query">
    <br>
<p>Optional. Field to sort by. Default is &quot;doj&quot;. Example: <code>doj</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="order"                data-endpoint="GETapi-master-panel-upcoming-work-anniversaries"
               value="ASC"
               data-component="query">
    <br>
<p>Optional. Sort order: ASC or DESC. Default is &quot;ASC&quot;. Example: <code>ASC</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>upcoming_days</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="upcoming_days"                data-endpoint="GETapi-master-panel-upcoming-work-anniversaries"
               value="30"
               data-component="query">
    <br>
<p>Optional. Number of upcoming days to check. Default is 30. Example: <code>30</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="GETapi-master-panel-upcoming-work-anniversaries"
               value="15"
               data-component="query">
    <br>
<p>Optional. Filter by a specific user ID. Example: <code>15</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>limit</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="limit"                data-endpoint="GETapi-master-panel-upcoming-work-anniversaries"
               value="10"
               data-component="query">
    <br>
<p>Optional. Number of results per page. Default is 15. Example: <code>10</code></p>
            </div>
                </form>

                    <h2 id="dashboard-GETapi-master-panel-members-on-leave">Get Members on Leave (Filtered &amp; Paginated)</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Returns a paginated list of users who are currently on leave or scheduled to be on leave
within a specified number of upcoming days. Supports filtering by search term, sorting,
user ID, and respects permission-based visibility for the requesting user.</p>

<span id="example-requests-GETapi-master-panel-members-on-leave">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/members-on-leave?search=Jane&amp;sort=from_date&amp;order=DESC&amp;upcoming_days=15&amp;user_id=5&amp;limit=10" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/members-on-leave"
);

const params = {
    "search": "Jane",
    "sort": "from_date",
    "order": "DESC",
    "upcoming_days": "15",
    "user_id": "5",
    "limit": "10",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-members-on-leave">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;rows&quot;: [
        {
            &quot;id&quot;: 12,
            &quot;member&quot;: &quot;John Doe &lt;ul class=&#039;list-unstyled users-list ...&#039;&gt;...&lt;/ul&gt;&quot;,
            &quot;from_date&quot;: &quot;Mon, May 20, 2025&quot;,
            &quot;to_date&quot;: &quot;Tue, May 21, 2025&quot;,
            &quot;type&quot;: &quot;&lt;span class=&#039;badge bg-primary&#039;&gt;Full&lt;/span&gt;&quot;,
            &quot;duration&quot;: &quot;2 days&quot;,
            &quot;days_left&quot;: 1
        }
    ],
    &quot;total&quot;: 15
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;order&quot;: [
            &quot;The selected order is invalid. Allowed values are ASC or DESC.&quot;
        ],
        &quot;sort&quot;: [
            &quot;The selected sort field is invalid.&quot;
        ],
        &quot;upcoming_days&quot;: [
            &quot;The upcoming_days must be an integer.&quot;
        ],
        &quot;limit&quot;: [
            &quot;The limit must be a positive integer.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Internal server error. Please try again later.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-members-on-leave" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-members-on-leave"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-members-on-leave"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-members-on-leave" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-members-on-leave">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-members-on-leave" data-method="GET"
      data-path="api/master-panel/members-on-leave"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-members-on-leave', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-members-on-leave"
                    onclick="tryItOut('GETapi-master-panel-members-on-leave');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-members-on-leave"
                    onclick="cancelTryOut('GETapi-master-panel-members-on-leave');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-members-on-leave"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/members-on-leave</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-master-panel-members-on-leave"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-members-on-leave"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="GETapi-master-panel-members-on-leave"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-members-on-leave"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>search</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="search"                data-endpoint="GETapi-master-panel-members-on-leave"
               value="Jane"
               data-component="query">
    <br>
<p>Optional. Search by first name or last name. Example: <code>Jane</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sort</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sort"                data-endpoint="GETapi-master-panel-members-on-leave"
               value="from_date"
               data-component="query">
    <br>
<p>Optional. Field to sort by. Default is <code>from_date</code>. Example: <code>from_date</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="order"                data-endpoint="GETapi-master-panel-members-on-leave"
               value="DESC"
               data-component="query">
    <br>
<p>Optional. Sort direction. Must be &quot;ASC&quot; or &quot;DESC&quot;. Default is &quot;ASC&quot;. Example: <code>DESC</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>upcoming_days</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="upcoming_days"                data-endpoint="GETapi-master-panel-members-on-leave"
               value="15"
               data-component="query">
    <br>
<p>Optional. Number of upcoming days to include. Default is 30. Example: <code>15</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="GETapi-master-panel-members-on-leave"
               value="5"
               data-component="query">
    <br>
<p>Optional. Filter by a specific user ID. Example: <code>5</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>limit</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="limit"                data-endpoint="GETapi-master-panel-members-on-leave"
               value="10"
               data-component="query">
    <br>
<p>Optional. Number of records per page. Default is 15. Example: <code>10</code></p>
            </div>
                </form>

                <h1 id="project-managemant">Project Managemant</h1>

    <p>This endpoint retrieves one specific project if an ID is provided, or returns a paginated list of projects
based on applied filters such as status, users, clients, date range, search terms, and favorite flag.</p>

                                <h2 id="project-managemant-GETapi-master-panel-projects--id--">Get Project(s)</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Fetch a single project by ID or a list of projects with optional filters.</p>

<span id="example-requests-GETapi-master-panel-projects--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/projects/23?search=redesign&amp;sort=title&amp;order=asc&amp;limit=5&amp;offset=10&amp;status=1&amp;user_id=2&amp;client_id=1&amp;project_start_date_from=2025-01-01&amp;project_start_date_to=2025-12-31&amp;project_end_date_from=2025-01-01&amp;project_end_date_to=2025-12-31&amp;is_favorites=1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/projects/23"
);

const params = {
    "search": "redesign",
    "sort": "title",
    "order": "asc",
    "limit": "5",
    "offset": "10",
    "status": "1",
    "user_id": "2",
    "client_id": "1",
    "project_start_date_from": "2025-01-01",
    "project_start_date_to": "2025-12-31",
    "project_end_date_from": "2025-01-01",
    "project_end_date_to": "2025-12-31",
    "is_favorites": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-projects--id--">
            <blockquote>
            <p>Example response (200, Single project found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Project retrieved successfully&quot;,
    &quot;total&quot;: 1,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 23,
            &quot;title&quot;: &quot;this is A projects&quot;,
            &quot;task_count&quot;: 0,
            &quot;status&quot;: &quot;Open&quot;,
            &quot;status_id&quot;: 1,
            &quot;priority&quot;: &quot;low&quot;,
            &quot;priority_id&quot;: 2,
            &quot;users&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;first_name&quot;: &quot;herry&quot;,
                    &quot;last_name&quot;: &quot;porter&quot;,
                    &quot;email&quot;: &quot;admin@gmail.com&quot;,
                    &quot;photo&quot;: &quot;http://localhost:8000/storage/photos/no-image.jpg&quot;
                }
            ],
            &quot;user_id&quot;: [
                2
            ],
            &quot;clients&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;first_name&quot;: &quot;jerry&quot;,
                    &quot;last_name&quot;: &quot;ginny&quot;,
                    &quot;email&quot;: &quot;jg@gmail.com&quot;,
                    &quot;photo&quot;: &quot;http://localhost:8000/storage/photos/gqHsvgmDBCbtf843SRYx31e6Zl51amPZY8eG05FB.jpg&quot;
                }
            ],
            &quot;client_id&quot;: [
                1
            ],
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;title&quot;: &quot;.first tag&quot;
                }
            ],
            &quot;tag_ids&quot;: [
                1
            ],
            &quot;start_date&quot;: &quot;2025-05-20&quot;,
            &quot;end_date&quot;: &quot;2025-05-25&quot;,
            &quot;budget&quot;: &quot;5000.00&quot;,
            &quot;task_accessibility&quot;: &quot;private&quot;,
            &quot;description&quot;: &quot;Project description here...&quot;,
            &quot;note&quot;: &quot;Internal note&quot;,
            &quot;favorite&quot;: false,
            &quot;client_can_discuss&quot;: null,
            &quot;created_at&quot;: &quot;2025-05-20&quot;,
            &quot;updated_at&quot;: &quot;2025-05-20&quot;
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Project not found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Project not found&quot;,
    &quot;total&quot;: 0,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (500, Unexpected error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;Some error message&quot;,
    &quot;message&quot;: &quot;Lead Couldn&#039;t Created.&quot;,
    &quot;line&quot;: 143,
    &quot;file&quot;: &quot;/app/Http/Controllers/ProjectController.php&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-projects--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-projects--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-projects--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-projects--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-projects--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-projects--id--" data-method="GET"
      data-path="api/master-panel/projects/{id?}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-projects--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-projects--id--"
                    onclick="tryItOut('GETapi-master-panel-projects--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-projects--id--"
                    onclick="cancelTryOut('GETapi-master-panel-projects--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-projects--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/projects/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-projects--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="GETapi-master-panel-projects--id--"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-projects--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-master-panel-projects--id--"
               value="23"
               data-component="url">
    <br>
<p>optional The ID of the project to retrieve. If provided, other filters are ignored. Example: <code>23</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>search</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="search"                data-endpoint="GETapi-master-panel-projects--id--"
               value="redesign"
               data-component="query">
    <br>
<p>optional Search by project title, description, or ID. Example: <code>redesign</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sort</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sort"                data-endpoint="GETapi-master-panel-projects--id--"
               value="title"
               data-component="query">
    <br>
<p>optional Column to sort by. Default is <code>created_at</code>. Example: <code>title</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="order"                data-endpoint="GETapi-master-panel-projects--id--"
               value="asc"
               data-component="query">
    <br>
<p>optional Sort order. Accepts <code>asc</code> or <code>desc</code>. Default is <code>desc</code>. Example: <code>asc</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>limit</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="limit"                data-endpoint="GETapi-master-panel-projects--id--"
               value="5"
               data-component="query">
    <br>
<p>optional Number of results per page. Default is 10. Example: <code>5</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>offset</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="offset"                data-endpoint="GETapi-master-panel-projects--id--"
               value="10"
               data-component="query">
    <br>
<p>optional Offset for pagination. Default is 0. Example: <code>10</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="status"                data-endpoint="GETapi-master-panel-projects--id--"
               value="1"
               data-component="query">
    <br>
<p>optional Filter by status ID. Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="GETapi-master-panel-projects--id--"
               value="2"
               data-component="query">
    <br>
<p>optional Filter by user ID (assigned user). Example: <code>2</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>client_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client_id"                data-endpoint="GETapi-master-panel-projects--id--"
               value="1"
               data-component="query">
    <br>
<p>optional Filter by client ID. Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>project_start_date_from</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="project_start_date_from"                data-endpoint="GETapi-master-panel-projects--id--"
               value="2025-01-01"
               data-component="query">
    <br>
<p>date optional Filter by project start date from (YYYY-MM-DD). Example: <code>2025-01-01</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>project_start_date_to</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="project_start_date_to"                data-endpoint="GETapi-master-panel-projects--id--"
               value="2025-12-31"
               data-component="query">
    <br>
<p>date optional Filter by project start date to (YYYY-MM-DD). Example: <code>2025-12-31</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>project_end_date_from</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="project_end_date_from"                data-endpoint="GETapi-master-panel-projects--id--"
               value="2025-01-01"
               data-component="query">
    <br>
<p>date optional Filter by project end date from (YYYY-MM-DD). Example: <code>2025-01-01</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>project_end_date_to</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="project_end_date_to"                data-endpoint="GETapi-master-panel-projects--id--"
               value="2025-12-31"
               data-component="query">
    <br>
<p>date optional Filter by project end date to (YYYY-MM-DD). Example: <code>2025-12-31</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>is_favorites</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="GETapi-master-panel-projects--id--" style="display: none">
            <input type="radio" name="is_favorites"
                   value="1"
                   data-endpoint="GETapi-master-panel-projects--id--"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-master-panel-projects--id--" style="display: none">
            <input type="radio" name="is_favorites"
                   value="0"
                   data-endpoint="GETapi-master-panel-projects--id--"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>optional Filter for favorite projects. Accepts 1 or 0. Example: <code>true</code></p>
            </div>
                </form>

                    <h2 id="project-managemant-POSTapi-master-panel-projects">Create a new project</h2>

<p>
</p>



<span id="example-requests-POSTapi-master-panel-projects">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/projects" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json" \
    --data "{
    \"title\": \"Website Redesign\",
    \"status_id\": 1,
    \"priority_id\": 4,
    \"start_date\": \"2025-05-01\",
    \"end_date\": \"2025-05-31\",
    \"budget\": \"5000\",
    \"task_accessibility\": \"project_users\",
    \"description\": \"A complete redesign of the company website.\",
    \"note\": \"Client prefers Figma for designs.\",
    \"enable_tasks_time_entries\": true,
    \"user_id\": [
        1,
        2,
        3
    ],
    \"client_id\": [
        1,
        43
    ],
    \"tag_ids\": [
        1
    ],
    \"isApi\": true,
    \"workspace_id\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/projects"
);

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

let body = {
    "title": "Website Redesign",
    "status_id": 1,
    "priority_id": 4,
    "start_date": "2025-05-01",
    "end_date": "2025-05-31",
    "budget": "5000",
    "task_accessibility": "project_users",
    "description": "A complete redesign of the company website.",
    "note": "Client prefers Figma for designs.",
    "enable_tasks_time_entries": true,
    "user_id": [
        1,
        2,
        3
    ],
    "client_id": [
        1,
        43
    ],
    "tag_ids": [
        1
    ],
    "isApi": true,
    "workspace_id": 17
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-projects">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Project created successfully.&quot;,
    &quot;id&quot;: 85,
    &quot;data&quot;: {
        &quot;id&quot;: 85,
        &quot;title&quot;: &quot;Website Redesign&quot;,
        &quot;task_count&quot;: 0,
        &quot;status&quot;: &quot;Open&quot;,
        &quot;status_id&quot;: 1,
        &quot;priority&quot;: &quot;high&quot;,
        &quot;priority_id&quot;: 1,
        &quot;users&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;first_name&quot;: &quot;super&quot;,
                &quot;last_name&quot;: &quot;Admin&quot;,
                &quot;email&quot;: &quot;superadmin@gmail.com&quot;,
                &quot;photo&quot;: &quot;http://localhost:8000/storage/photos/no-image.jpg&quot;
            }
        ],
        &quot;user_id&quot;: [
            1,
            2,
            3
        ],
        &quot;clients&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;first_name&quot;: &quot;jerry&quot;,
                &quot;last_name&quot;: &quot;ginny&quot;,
                &quot;email&quot;: &quot;jg@gmail.com&quot;,
                &quot;photo&quot;: &quot;http://localhost:8000/storage/photos/sample.jpg&quot;
            }
        ],
        &quot;client_id&quot;: [
            1,
            28
        ],
        &quot;tags&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;title&quot;: &quot;.first tag&quot;
            }
        ],
        &quot;tag_ids&quot;: [
            1
        ],
        &quot;start_date&quot;: &quot;2025-05-01&quot;,
        &quot;end_date&quot;: &quot;2025-05-31&quot;,
        &quot;budget&quot;: &quot;5000&quot;,
        &quot;task_accessibility&quot;: &quot;project_users&quot;,
        &quot;description&quot;: &quot;A complete redesign of the company website.&quot;,
        &quot;note&quot;: &quot;Client prefers Figma for designs.&quot;,
        &quot;favorite&quot;: false,
        &quot;client_can_discuss&quot;: null,
        &quot;created_at&quot;: &quot;2025-05-30&quot;,
        &quot;updated_at&quot;: &quot;2025-05-30&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, Unauthorized status change):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;You are not authorized to set this status.&quot;,
    &quot;data&quot;: [],
    &quot;code&quot;: 403
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, Validation errors):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;title&quot;: [
            &quot;The title field is required.&quot;
        ],
        &quot;status_id&quot;: [
            &quot;The status field is required.&quot;
        ],
        &quot;start_date&quot;: [
            &quot;The start date must be before end date.&quot;
        ],
        &quot;budget&quot;: [
            &quot;The budget format is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500, Unexpected server error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Something went wrong while creating the project.&quot;,
    &quot;code&quot;: 500
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-projects" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-projects"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-projects"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-projects" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-projects">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-projects" data-method="POST"
      data-path="api/master-panel/projects"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-projects', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-projects"
                    onclick="tryItOut('POSTapi-master-panel-projects');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-projects"
                    onclick="cancelTryOut('POSTapi-master-panel-projects');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-projects"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/projects</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization"                data-endpoint="POSTapi-master-panel-projects"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-projects"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="POSTapi-master-panel-projects"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-projects"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-master-panel-projects"
               value="Website Redesign"
               data-component="body">
    <br>
<p>The title of the project. Example: <code>Website Redesign</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="status_id"                data-endpoint="POSTapi-master-panel-projects"
               value="1"
               data-component="body">
    <br>
<p>The status ID for the project. Must exist in statuses table. Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>priority_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="priority_id"                data-endpoint="POSTapi-master-panel-projects"
               value="4"
               data-component="body">
    <br>
<p>The priority ID. Must exist in priorities table. Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="POSTapi-master-panel-projects"
               value="2025-05-01"
               data-component="body">
    <br>
<p>The project start date in <code>Y-m-d</code> format. Must be before or equal to <code>end_date</code>. Example: <code>2025-05-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="end_date"                data-endpoint="POSTapi-master-panel-projects"
               value="2025-05-31"
               data-component="body">
    <br>
<p>The project end date in <code>Y-m-d</code> format. Must be after or equal to <code>start_date</code>. Example: <code>2025-05-31</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>budget</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="budget"                data-endpoint="POSTapi-master-panel-projects"
               value="5000"
               data-component="body">
    <br>
<p>The budget amount (formatted string or numeric). Example: <code>5000</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>task_accessibility</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="task_accessibility"                data-endpoint="POSTapi-master-panel-projects"
               value="project_users"
               data-component="body">
    <br>
<p>Must be either <code>project_users</code> or <code>assigned_users</code>. Example: <code>project_users</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-master-panel-projects"
               value="A complete redesign of the company website."
               data-component="body">
    <br>
<p>Project description (optional). Example: <code>A complete redesign of the company website.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>note</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="note"                data-endpoint="POSTapi-master-panel-projects"
               value="Client prefers Figma for designs."
               data-component="body">
    <br>
<p>Internal note (optional). Example: <code>Client prefers Figma for designs.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>enable_tasks_time_entries</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-master-panel-projects" style="display: none">
            <input type="radio" name="enable_tasks_time_entries"
                   value="true"
                   data-endpoint="POSTapi-master-panel-projects"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-master-panel-projects" style="display: none">
            <input type="radio" name="enable_tasks_time_entries"
                   value="false"
                   data-endpoint="POSTapi-master-panel-projects"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Whether time entries are enabled. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id[0]"                data-endpoint="POSTapi-master-panel-projects"
               data-component="body">
        <input type="number" style="display: none"
               name="user_id[1]"                data-endpoint="POSTapi-master-panel-projects"
               data-component="body">
    <br>
<p>Array of user IDs to assign.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_id</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client_id[0]"                data-endpoint="POSTapi-master-panel-projects"
               data-component="body">
        <input type="number" style="display: none"
               name="client_id[1]"                data-endpoint="POSTapi-master-panel-projects"
               data-component="body">
    <br>
<p>Array of client IDs to assign.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tag_ids</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="tag_ids[0]"                data-endpoint="POSTapi-master-panel-projects"
               data-component="body">
        <input type="number" style="display: none"
               name="tag_ids[1]"                data-endpoint="POSTapi-master-panel-projects"
               data-component="body">
    <br>
<p>Array of tag IDs to attach.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-master-panel-projects" style="display: none">
            <input type="radio" name="isApi"
                   value="true"
                   data-endpoint="POSTapi-master-panel-projects"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-master-panel-projects" style="display: none">
            <input type="radio" name="isApi"
                   value="false"
                   data-endpoint="POSTapi-master-panel-projects"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Optional flag to determine API-specific behavior. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="workspace_id"                data-endpoint="POSTapi-master-panel-projects"
               value="17"
               data-component="body">
    <br>
<p>Workspace Id . Must exist in wprkspaces table . example:2 Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="project-managemant-PUTapi-master-panel-projects--id-">Update an existing project.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-master-panel-projects--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/master-panel/projects/consequatur?isApi=1" \
    --header "workspace_id: 2" \
    --header "Accept: application/json" \
    --header "Content-Type: application/json" \
    --data "{
    \"id\": 111,
    \"title\": \"\\\"Website Redesign\\\"\",
    \"status_id\": 1,
    \"priority_id\": 4,
    \"budget\": 5000,
    \"start_date\": \"2025-05-01\",
    \"end_date\": \"2025-05-31\",
    \"task_accessibility\": \"project_users\",
    \"description\": \"\\\"A complete redesign of the company website.\\\"\",
    \"note\": \"[1, 2, 3]\",
    \"client_id\": [
        1,
        43
    ],
    \"tag_ids\": [
        1
    ],
    \"enable_tasks_time_entries\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/projects/consequatur"
);

const params = {
    "isApi": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "workspace_id": "2",
    "Accept": "application/json",
    "Content-Type": "application/json",
};

let body = {
    "id": 111,
    "title": "\"Website Redesign\"",
    "status_id": 1,
    "priority_id": 4,
    "budget": 5000,
    "start_date": "2025-05-01",
    "end_date": "2025-05-31",
    "task_accessibility": "project_users",
    "description": "\"A complete redesign of the company website.\"",
    "note": "[1, 2, 3]",
    "client_id": [
        1,
        43
    ],
    "tag_ids": [
        1
    ],
    "enable_tasks_time_entries": true
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-master-panel-projects--id-">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Project updated successfully.&quot;,
    &quot;id&quot;: 111,
    &quot;data&quot;: {
        &quot;id&quot;: 111,
        &quot;title&quot;: &quot;updated&quot;,
        &quot;task_count&quot;: 0,
        &quot;status&quot;: &quot;Open&quot;,
        &quot;status_id&quot;: 1,
        &quot;priority&quot;: &quot;r&quot;,
        &quot;priority_id&quot;: 4,
        &quot;users&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;first_name&quot;: &quot;herry&quot;,
                &quot;last_name&quot;: &quot;porter&quot;,
                &quot;email&quot;: &quot;admin@gmail.com&quot;,
                &quot;photo&quot;: &quot;http://localhost:8000/storage/photos/no-image.jpg&quot;
            }
        ],
        &quot;user_id&quot;: [
            2
        ],
        &quot;clients&quot;: [],
        &quot;client_id&quot;: [],
        &quot;tags&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;title&quot;: &quot;first tag&quot;
            }
        ],
        &quot;tag_ids&quot;: [
            1
        ],
        &quot;start_date&quot;: &quot;2025-05-01&quot;,
        &quot;end_date&quot;: &quot;2025-05-31&quot;,
        &quot;budget&quot;: &quot;5000&quot;,
        &quot;task_accessibility&quot;: &quot;project_users&quot;,
        &quot;description&quot;: &quot;A complete redesign of the company website.&quot;,
        &quot;note&quot;: &quot;Client prefers Figma for designs.&quot;,
        &quot;favorite&quot;: 0,
        &quot;client_can_discuss&quot;: null,
        &quot;created_at&quot;: &quot;2025-06-09&quot;,
        &quot;updated_at&quot;: &quot;2025-06-09&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, Validation failed):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;title&quot;: [
            &quot;The title field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500, Unexpected error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;An error occurred while updating the project.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-master-panel-projects--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-master-panel-projects--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-master-panel-projects--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-master-panel-projects--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-master-panel-projects--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-master-panel-projects--id-" data-method="PUT"
      data-path="api/master-panel/projects/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-master-panel-projects--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-master-panel-projects--id-"
                    onclick="tryItOut('PUTapi-master-panel-projects--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-master-panel-projects--id-"
                    onclick="cancelTryOut('PUTapi-master-panel-projects--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-master-panel-projects--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/master-panel/projects/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="PUTapi-master-panel-projects--id-"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-master-panel-projects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-master-panel-projects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-master-panel-projects--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the project. Example: <code>consequatur</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-master-panel-projects--id-" style="display: none">
            <input type="radio" name="isApi"
                   value="1"
                   data-endpoint="PUTapi-master-panel-projects--id-"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-master-panel-projects--id-" style="display: none">
            <input type="radio" name="isApi"
                   value="0"
                   data-endpoint="PUTapi-master-panel-projects--id-"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Optional. Set to true if you want API formatted response. Example: <code>true</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-master-panel-projects--id-"
               value="111"
               data-component="body">
    <br>
<p>The ID of the project to update. Example: <code>111</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-master-panel-projects--id-"
               value=""Website Redesign""
               data-component="body">
    <br>
<p>The title of the project. Example: <code>"Website Redesign"</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="status_id"                data-endpoint="PUTapi-master-panel-projects--id-"
               value="1"
               data-component="body">
    <br>
<p>The ID of the status to assign. Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>priority_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="priority_id"                data-endpoint="PUTapi-master-panel-projects--id-"
               value="4"
               data-component="body">
    <br>
<p>The ID of the priority to assign. Nullable. Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>budget</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="budget"                data-endpoint="PUTapi-master-panel-projects--id-"
               value="5000"
               data-component="body">
    <br>
<p>The budget allocated to the project. Nullable. Example: <code>5000</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="PUTapi-master-panel-projects--id-"
               value="2025-05-01"
               data-component="body">
    <br>
<p>The start date of the project. Must be before or equal to end_date. Format: Y-m-d. Example: <code>2025-05-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_date"                data-endpoint="PUTapi-master-panel-projects--id-"
               value="2025-05-31"
               data-component="body">
    <br>
<p>The end date of the project. Format: Y-m-d. Example: <code>2025-05-31</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>task_accessibility</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="task_accessibility"                data-endpoint="PUTapi-master-panel-projects--id-"
               value="project_users"
               data-component="body">
    <br>
<p>The task accessibility setting. Example: <code>project_users</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-master-panel-projects--id-"
               value=""A complete redesign of the company website.""
               data-component="body">
    <br>
<p>A brief description of the project. Nullable. Example: <code>"A complete redesign of the company website."</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>note</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="note"                data-endpoint="PUTapi-master-panel-projects--id-"
               value="[1, 2, 3]"
               data-component="body">
    <br>
<p>Additional notes for the project. Nullable. Example: &quot;Client prefers Figma for designs.&quot;
@bodyParam user_id int[] required Array of user IDs to assign. Example: <code>[1, 2, 3]</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_id</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client_id[0]"                data-endpoint="PUTapi-master-panel-projects--id-"
               data-component="body">
        <input type="number" style="display: none"
               name="client_id[1]"                data-endpoint="PUTapi-master-panel-projects--id-"
               data-component="body">
    <br>
<p>Array of client IDs to assign.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tag_ids</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="tag_ids[0]"                data-endpoint="PUTapi-master-panel-projects--id-"
               data-component="body">
        <input type="number" style="display: none"
               name="tag_ids[1]"                data-endpoint="PUTapi-master-panel-projects--id-"
               data-component="body">
    <br>
<p>Array of tag IDs to attach.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>enable_tasks_time_entries</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-master-panel-projects--id-" style="display: none">
            <input type="radio" name="enable_tasks_time_entries"
                   value="true"
                   data-endpoint="PUTapi-master-panel-projects--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-master-panel-projects--id-" style="display: none">
            <input type="radio" name="enable_tasks_time_entries"
                   value="false"
                   data-endpoint="PUTapi-master-panel-projects--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Whether to enable time entries on tasks. Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="project-managemant-DELETEapi-master-panel-projects--id-">Delete a project.</h2>

<p>
</p>

<p>This endpoint deletes a project by its ID. It also removes all associated comments and their attachments.
Files are permanently removed from the public storage disk.</p>

<span id="example-requests-DELETEapi-master-panel-projects--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/projects/85" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/projects/85"
);

const headers = {
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-projects--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Project deleted successfully.&quot;,
    &quot;id&quot;: &quot;85&quot;,
    &quot;title&quot;: &quot;this is updated&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Project not found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Project not found.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (500, Unexpected error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;An unexpected error occurred while deleting the project.&quot;,
    &quot;exception&quot;: &quot;Exception message&quot;,
    &quot;line&quot;: 123,
    &quot;file&quot;: &quot;path/to/file&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-projects--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-projects--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-projects--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-projects--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-projects--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-projects--id-" data-method="DELETE"
      data-path="api/master-panel/projects/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-projects--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-projects--id-"
                    onclick="tryItOut('DELETEapi-master-panel-projects--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-projects--id-"
                    onclick="cancelTryOut('DELETEapi-master-panel-projects--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-projects--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/projects/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-projects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="DELETEapi-master-panel-projects--id-"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-projects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-master-panel-projects--id-"
               value="85"
               data-component="url">
    <br>
<p>The ID of the project to delete. Example: <code>85</code></p>
            </div>
                    </form>

                    <h2 id="project-managemant-DELETEapi-master-panel-destroy-multiple-projects">Delete multiple projects.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint allows you to delete multiple projects by providing their IDs.
All related comments and attachments will also be permanently deleted.</p>

<span id="example-requests-DELETEapi-master-panel-destroy-multiple-projects">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/destroy-multiple-projects" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json" \
    --data "{
    \"ids\": [
        1,
        2,
        3
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/destroy-multiple-projects"
);

const headers = {
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

let body = {
    "ids": [
        1,
        2,
        3
    ]
};

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-destroy-multiple-projects">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Project(s) deleted successfully.&quot;,
    &quot;ids&quot;: [
        1,
        2,
        3
    ],
    &quot;titles&quot;: [
        &quot;Project A&quot;,
        &quot;Project B&quot;,
        &quot;Project C&quot;
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;ids&quot;: [
            &quot;The ids field is required.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-destroy-multiple-projects" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-destroy-multiple-projects"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-destroy-multiple-projects"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-destroy-multiple-projects" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-destroy-multiple-projects">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-destroy-multiple-projects" data-method="DELETE"
      data-path="api/master-panel/destroy-multiple-projects"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-destroy-multiple-projects', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-destroy-multiple-projects"
                    onclick="tryItOut('DELETEapi-master-panel-destroy-multiple-projects');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-destroy-multiple-projects"
                    onclick="cancelTryOut('DELETEapi-master-panel-destroy-multiple-projects');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-destroy-multiple-projects"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/destroy-multiple-projects</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-destroy-multiple-projects"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="DELETEapi-master-panel-destroy-multiple-projects"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-destroy-multiple-projects"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
 &nbsp;
<br>
<p>An array of project IDs to delete.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>*</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ids.*"                data-endpoint="DELETEapi-master-panel-destroy-multiple-projects"
               value="17"
               data-component="body">
    <br>
<p>Each ID must exist in the projects table. Example: <code>17</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="project-managemant-POSTapi-master-panel-update_favorite--id-">Update the favorite status of a project.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint updates whether a project is marked as a favorite or not. The user must be authenticated to perform this action.</p>

<span id="example-requests-POSTapi-master-panel-update_favorite--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/update_favorite/17" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json" \
    --data "{
    \"is_favorite\": 17
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/update_favorite/17"
);

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

let body = {
    "is_favorite": 17
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-update_favorite--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Project favorite status updated successfully&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 438,
        &quot;title&quot;: &quot;Res Test&quot;,
        &quot;status&quot;: &quot;Default&quot;,
        &quot;priority&quot;: &quot;dsfdsf&quot;,
        &quot;users&quot;: [
            {
                &quot;id&quot;: 7,
                &quot;first_name&quot;: &quot;Madhavan&quot;,
                &quot;last_name&quot;: &quot;Vaidya&quot;,
                &quot;photo&quot;: &quot;https://test-taskify.infinitietech.com/storage/photos/yxNYBlFLALdLomrL0JzUY2USPLILL9Ocr16j4n2o.png&quot;
            }
        ],
        &quot;clients&quot;: [
            {
                &quot;id&quot;: 103,
                &quot;first_name&quot;: &quot;Test&quot;,
                &quot;last_name&quot;: &quot;Test&quot;,
                &quot;photo&quot;: &quot;https://test-taskify.infinitietech.com/storage/photos/no-image.jpg&quot;
            }
        ],
        &quot;tags&quot;: [
            {
                &quot;id&quot;: 45,
                &quot;title&quot;: &quot;Tag from update project&quot;
            }
        ],
        &quot;start_date&quot;: null,
        &quot;end_date&quot;: null,
        &quot;budget&quot;: &quot;1000.00&quot;,
        &quot;task_accessibility&quot;: &quot;assigned_users&quot;,
        &quot;description&quot;: null,
        &quot;note&quot;: null,
        &quot;favorite&quot;: 1,
        &quot;created_at&quot;: &quot;07-08-2024 14:38:51&quot;,
        &quot;updated_at&quot;: &quot;12-08-2024 13:36:10&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Project not found&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Validation errors occurred&quot;,
    &quot;errors&quot;: {
        &quot;is_favorite&quot;: [
            &quot;The is favorite field must be either 0 or 1.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;An error occurred while updating the favorite status.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-update_favorite--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-update_favorite--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-update_favorite--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-update_favorite--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-update_favorite--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-update_favorite--id-" data-method="POST"
      data-path="api/master-panel/update_favorite/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-update_favorite--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-update_favorite--id-"
                    onclick="tryItOut('POSTapi-master-panel-update_favorite--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-update_favorite--id-"
                    onclick="cancelTryOut('POSTapi-master-panel-update_favorite--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-update_favorite--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/update_favorite/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-master-panel-update_favorite--id-"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-update_favorite--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="POSTapi-master-panel-update_favorite--id-"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-update_favorite--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="POSTapi-master-panel-update_favorite--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the project to update. Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_favorite</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="is_favorite"                data-endpoint="POSTapi-master-panel-update_favorite--id-"
               value="17"
               data-component="body">
    <br>
<p>Indicates whether the project is a favorite. Use 1 for true and 0 for false. Example: <code>17</code></p>
        </div>
        </form>

                    <h2 id="project-managemant-POSTapi-master-panel-projects--id--duplicate">Duplicate a project.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-master-panel-projects--id--duplicate">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/projects/12/duplicate?title=New+Project+Copy&amp;reload=1" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/projects/12/duplicate"
);

const params = {
    "title": "New Project Copy",
    "reload": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-projects--id--duplicate">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Project duplicated successfully.&quot;,
    &quot;id&quot;: 12
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Project duplication failed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-projects--id--duplicate" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-projects--id--duplicate"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-projects--id--duplicate"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-projects--id--duplicate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-projects--id--duplicate">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-projects--id--duplicate" data-method="POST"
      data-path="api/master-panel/projects/{id}/duplicate"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-projects--id--duplicate', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-projects--id--duplicate"
                    onclick="tryItOut('POSTapi-master-panel-projects--id--duplicate');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-projects--id--duplicate"
                    onclick="cancelTryOut('POSTapi-master-panel-projects--id--duplicate');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-projects--id--duplicate"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/projects/{id}/duplicate</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-master-panel-projects--id--duplicate"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-projects--id--duplicate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="POSTapi-master-panel-projects--id--duplicate"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-projects--id--duplicate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="POSTapi-master-panel-projects--id--duplicate"
               value="12"
               data-component="url">
    <br>
<p>The ID of the project to duplicate. Example: <code>12</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-master-panel-projects--id--duplicate"
               value="New Project Copy"
               data-component="query">
    <br>
<p>Optional. A new title for the duplicated project. Example: <code>New Project Copy</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>reload</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-master-panel-projects--id--duplicate" style="display: none">
            <input type="radio" name="reload"
                   value="1"
                   data-endpoint="POSTapi-master-panel-projects--id--duplicate"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-master-panel-projects--id--duplicate" style="display: none">
            <input type="radio" name="reload"
                   value="0"
                   data-endpoint="POSTapi-master-panel-projects--id--duplicate"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Optional. If true, flashes a session message. Example: <code>true</code></p>
            </div>
                </form>

                <h1 id="project-media">Project Media</h1>

    

                                <h2 id="project-media-POSTapi-master-panel-projects-upload-media">Upload media files to a specific project.</h2>

<p>
</p>

<p>This endpoint allows uploading one or multiple media files associated with a project.</p>

<span id="example-requests-POSTapi-master-panel-projects-upload-media">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/projects/upload-media" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: multipart/form-data" \
    --form "id=15"\
    --form "media_files[]=@C:\Users\Dikshita\AppData\Local\Temp\phpBC64.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/projects/upload-media"
);

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "multipart/form-data",
};

const body = new FormData();
body.append('id', '15');
body.append('media_files[]', document.querySelector('input[name="media_files[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-projects-upload-media">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Media uploaded successfully.&quot;,
    &quot;id&quot;: [
        6,
        7
    ],
    &quot;data&quot;: [
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;maxresdefault&quot;,
            &quot;file_name&quot;: &quot;maxresdefault.jpg&quot;,
            &quot;file_size&quot;: 72106,
            &quot;file_type&quot;: &quot;image/jpeg&quot;,
            &quot;created_at&quot;: &quot;2025-06-02&quot;,
            &quot;updated_at&quot;: &quot;2025-06-02&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;screenshot&quot;,
            &quot;file_name&quot;: &quot;screenshot.png&quot;,
            &quot;file_size&quot;: 45000,
            &quot;file_type&quot;: &quot;image/png&quot;,
            &quot;created_at&quot;: &quot;2025-06-02&quot;,
            &quot;updated_at&quot;: &quot;2025-06-02&quot;
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;No file(s) chosen.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;media_files.0&quot;: [
            &quot;The media files.0 may not be greater than 2048 kilobytes.&quot;
        ],
        &quot;id&quot;: [
            &quot;The selected id is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;Detailed exception message here&quot;,
    &quot;message&quot;: &quot;Project could not be created.&quot;,
    &quot;line&quot;: 123,
    &quot;file&quot;: &quot;/path/to/file.php&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-projects-upload-media" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-projects-upload-media"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-projects-upload-media"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-projects-upload-media" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-projects-upload-media">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-projects-upload-media" data-method="POST"
      data-path="api/master-panel/projects/upload-media"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-projects-upload-media', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-projects-upload-media"
                    onclick="tryItOut('POSTapi-master-panel-projects-upload-media');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-projects-upload-media"
                    onclick="cancelTryOut('POSTapi-master-panel-projects-upload-media');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-projects-upload-media"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/projects/upload-media</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization"                data-endpoint="POSTapi-master-panel-projects-upload-media"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-projects-upload-media"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="POSTapi-master-panel-projects-upload-media"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-projects-upload-media"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="POSTapi-master-panel-projects-upload-media"
               value="15"
               data-component="body">
    <br>
<p>The ID of the project to attach media to. Example: <code>15</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>media_files[]</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="media_files.0"                data-endpoint="POSTapi-master-panel-projects-upload-media"
               value=""
               data-component="body">
    <br>
<p>One or more files to upload (multipart/form-data). Example: <code>C:\Users\Dikshita\AppData\Local\Temp\phpBC64.tmp</code></p>
        </div>
        </form>

                    <h2 id="project-media-GETapi-master-panel-projects--id--media">Get project media files</h2>

<p>
</p>

<p>Retrieves all media files uploaded to a specific project. Supports sorting and filtering. Returns a formatted list of media with file URL, preview, and action buttons.</p>

<span id="example-requests-GETapi-master-panel-projects--id--media">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/projects/1/media?search=report&amp;sort=file_name&amp;order=asc&amp;isApi=1" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/projects/1/media"
);

const params = {
    "search": "report",
    "sort": "file_name",
    "order": "asc",
    "isApi": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-projects--id--media">
            <blockquote>
            <p>Example response (200, Success - API response):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Media retrieved successfully.&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 4,
            &quot;file&quot;: &quot;&lt;a href=\&quot;http://localhost:8000/storage/project-media/images.jpg\&quot; data-lightbox=\&quot;project-media\&quot;&gt; &lt;img src=\&quot;http://localhost:8000/storage/project-media/images.jpg\&quot; alt=\&quot;images.jpg\&quot; width=\&quot;50\&quot;&gt;&lt;/a&gt;&quot;,
            &quot;file_name&quot;: &quot;images.jpg&quot;,
            &quot;file_size&quot;: &quot;11.89 KB&quot;,
            &quot;created_at&quot;: &quot;2025-06-02&quot;,
            &quot;updated_at&quot;: &quot;2025-06-02&quot;,
            &quot;actions&quot;: [
                &quot;&lt;a href=\&quot;http://localhost:8000/storage/project-media/images.jpg\&quot; title=Download download&gt;&lt;i class=\&quot;bx bx-download bx-sm\&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;button title=Delete type=\&quot;button\&quot; class=\&quot;btn delete\&quot; data-id=\&quot;4\&quot; data-type=\&quot;project-media\&quot; data-table=\&quot;project_media_table\&quot;&gt;&lt;i class=\&quot;bx bx-trash text-danger\&quot;&gt;&lt;/i&gt;&lt;/button&gt;&quot;
            ]
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (200, Success - Non-API JSON table response):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;rows&quot;: [
        {
            &quot;id&quot;: 4,
            &quot;file&quot;: &quot;&lt;a href=\&quot;http://localhost:8000/storage/project-media/images.jpg\&quot; data-lightbox=\&quot;project-media\&quot;&gt; &lt;img src=\&quot;http://localhost:8000/storage/project-media/images.jpg\&quot; alt=\&quot;images.jpg\&quot; width=\&quot;50\&quot;&gt;&lt;/a&gt;&quot;,
            &quot;file_name&quot;: &quot;images.jpg&quot;,
            &quot;file_size&quot;: &quot;11.89 KB&quot;,
            &quot;created_at&quot;: &quot;2025-06-02&quot;,
            &quot;updated_at&quot;: &quot;2025-06-02&quot;,
            &quot;actions&quot;: [
                &quot;&lt;a href=\&quot;http://localhost:8000/storage/project-media/images.jpg\&quot; title=Download download&gt;&lt;i class=\&quot;bx bx-download bx-sm\&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;button title=Delete type=\&quot;button\&quot; class=\&quot;btn delete\&quot; data-id=\&quot;4\&quot; data-type=\&quot;project-media\&quot; data-table=\&quot;project_media_table\&quot;&gt;&lt;i class=\&quot;bx bx-trash text-danger\&quot;&gt;&lt;/i&gt;&lt;/button&gt;&quot;
            ]
        }
    ],
    &quot;total&quot;: 1
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Project not found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Project] 99&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-projects--id--media" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-projects--id--media"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-projects--id--media"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-projects--id--media" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-projects--id--media">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-projects--id--media" data-method="GET"
      data-path="api/master-panel/projects/{id}/media"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-projects--id--media', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-projects--id--media"
                    onclick="tryItOut('GETapi-master-panel-projects--id--media');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-projects--id--media"
                    onclick="cancelTryOut('GETapi-master-panel-projects--id--media');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-projects--id--media"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/projects/{id}/media</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization"                data-endpoint="GETapi-master-panel-projects--id--media"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-projects--id--media"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="GETapi-master-panel-projects--id--media"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-projects--id--media"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-master-panel-projects--id--media"
               value="1"
               data-component="url">
    <br>
<p>The ID of the project. Example: <code>1</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>search</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="search"                data-endpoint="GETapi-master-panel-projects--id--media"
               value="report"
               data-component="query">
    <br>
<p>Optional. Search term to filter media by ID, file name, or creation date. Example: <code>report</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sort</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sort"                data-endpoint="GETapi-master-panel-projects--id--media"
               value="file_name"
               data-component="query">
    <br>
<p>Optional. Field to sort by (e.g., id, file_name). Default: id. Example: <code>file_name</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="order"                data-endpoint="GETapi-master-panel-projects--id--media"
               value="asc"
               data-component="query">
    <br>
<p>Optional. Sorting order: <code>asc</code> or <code>desc</code>. Default: desc. Example: <code>asc</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="GETapi-master-panel-projects--id--media" style="display: none">
            <input type="radio" name="isApi"
                   value="1"
                   data-endpoint="GETapi-master-panel-projects--id--media"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-master-panel-projects--id--media" style="display: none">
            <input type="radio" name="isApi"
                   value="0"
                   data-endpoint="GETapi-master-panel-projects--id--media"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Optional. When true, returns a formatted API response instead of JSON table structure. Example: <code>true</code></p>
            </div>
                </form>

                    <h2 id="project-media-DELETEapi-master-panel-media--id-">Delete a single media file by ID.</h2>

<p>
</p>

<p>Deletes a media file record and its associated file from storage.</p>

<span id="example-requests-DELETEapi-master-panel-media--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/media/consequatur" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/media/consequatur"
);

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-media--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;File deleted successfully.&quot;,
    &quot;id&quot;: 101,
    &quot;title&quot;: &quot;example.jpg&quot;,
    &quot;parent_id&quot;: 15,
    &quot;type&quot;: &quot;media&quot;,
    &quot;parent_type&quot;: &quot;project&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Media Not Found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;File not found.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-media--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-media--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-media--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-media--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-media--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-media--id-" data-method="DELETE"
      data-path="api/master-panel/media/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-media--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-media--id-"
                    onclick="tryItOut('DELETEapi-master-panel-media--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-media--id-"
                    onclick="cancelTryOut('DELETEapi-master-panel-media--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-media--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/media/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization"                data-endpoint="DELETEapi-master-panel-media--id-"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-media--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="DELETEapi-master-panel-media--id-"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-media--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-master-panel-media--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the medium. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>mediaId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="mediaId"                data-endpoint="DELETEapi-master-panel-media--id-"
               value="101"
               data-component="url">
    <br>
<p>The ID of the media file to delete. Example: <code>101</code></p>
            </div>
                    </form>

                    <h2 id="project-media-POSTapi-master-panel-media-delete-multiple">Delete multiple media files by their IDs.</h2>

<p>
</p>

<p>Accepts an array of media IDs to delete multiple media files in a single request.</p>

<span id="example-requests-POSTapi-master-panel-media-delete-multiple">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/media/delete-multiple" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json" \
    --data "{
    \"ids\": [
        101,
        102,
        103
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/media/delete-multiple"
);

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

let body = {
    "ids": [
        101,
        102,
        103
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-media-delete-multiple">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Files(s) deleted successfully.&quot;,
    &quot;id&quot;: [
        101,
        102
    ],
    &quot;titles&quot;: [
        &quot;example1.jpg&quot;,
        &quot;example2.png&quot;
    ],
    &quot;parent_id&quot;: [
        15,
        15
    ],
    &quot;type&quot;: &quot;media&quot;,
    &quot;parent_type&quot;: &quot;project&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, Validation Error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;ids&quot;: [
            &quot;The ids field is required.&quot;
        ],
        &quot;ids.0&quot;: [
            &quot;The selected ids.0 is invalid.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-media-delete-multiple" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-media-delete-multiple"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-media-delete-multiple"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-media-delete-multiple" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-media-delete-multiple">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-media-delete-multiple" data-method="POST"
      data-path="api/master-panel/media/delete-multiple"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-media-delete-multiple', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-media-delete-multiple"
                    onclick="tryItOut('POSTapi-master-panel-media-delete-multiple');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-media-delete-multiple"
                    onclick="cancelTryOut('POSTapi-master-panel-media-delete-multiple');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-media-delete-multiple"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/media/delete-multiple</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization"                data-endpoint="POSTapi-master-panel-media-delete-multiple"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-media-delete-multiple"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="POSTapi-master-panel-media-delete-multiple"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-media-delete-multiple"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
 &nbsp;
<br>
<p>Array of media IDs to delete.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>*</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ids.*"                data-endpoint="POSTapi-master-panel-media-delete-multiple"
               value="17"
               data-component="body">
    <br>
<p>Each media ID must exist in the media table. Example: <code>17</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                <h1 id="project-milestones">Project Milestones</h1>

    

                                <h2 id="project-milestones-POSTapi-master-panel-create-milestone">Create a new milestone for a project</h2>

<p>
</p>

<p>This endpoint allows users to create a milestone under a specific project.</p>

<span id="example-requests-POSTapi-master-panel-create-milestone">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/create-milestone" \
    --header "workspace_id: integer required The ID of the workspace. Example: 2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"project_id\": 5,
    \"title\": \"Final Design Review\",
    \"status\": \"incomplete\",
    \"start_date\": \"2025-06-10\",
    \"end_date\": \"2025-06-20\",
    \"cost\": \"2000.50\",
    \"description\": \"All screens finalized and approved by client.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/create-milestone"
);

const headers = {
    "workspace_id": "integer required The ID of the workspace. Example: 2",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "project_id": 5,
    "title": "Final Design Review",
    "status": "incomplete",
    "start_date": "2025-06-10",
    "end_date": "2025-06-20",
    "cost": "2000.50",
    "description": "All screens finalized and approved by client."
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-create-milestone">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Milestone created successfully.&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 12,
        &quot;type&quot;: &quot;milestone&quot;,
        &quot;parent_type&quot;: &quot;project&quot;,
        &quot;parent_id&quot;: 5
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;project_id&quot;: [
            &quot;The project_id field is required.&quot;
        ],
        &quot;title&quot;: [
            &quot;The title field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Milestone couldn&#039;t be created: Milestone creation failed due to mass assignment or DB error.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-create-milestone" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-create-milestone"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-create-milestone"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-create-milestone" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-create-milestone">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-create-milestone" data-method="POST"
      data-path="api/master-panel/create-milestone"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-create-milestone', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-create-milestone"
                    onclick="tryItOut('POSTapi-master-panel-create-milestone');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-create-milestone"
                    onclick="cancelTryOut('POSTapi-master-panel-create-milestone');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-create-milestone"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/create-milestone</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="POSTapi-master-panel-create-milestone"
               value="integer required The ID of the workspace. Example: 2"
               data-component="header">
    <br>
<p>Example: <code>integer required The ID of the workspace. Example: 2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-create-milestone"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-create-milestone"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>project_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="project_id"                data-endpoint="POSTapi-master-panel-create-milestone"
               value="5"
               data-component="body">
    <br>
<p>The ID of the project the milestone belongs to. Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-master-panel-create-milestone"
               value="Final Design Review"
               data-component="body">
    <br>
<p>The title of the milestone. Example: <code>Final Design Review</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-master-panel-create-milestone"
               value="incomplete"
               data-component="body">
    <br>
<p>The status of the milestone. Must be one of: incomplete, complete, pending. Example: <code>incomplete</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="POSTapi-master-panel-create-milestone"
               value="2025-06-10"
               data-component="body">
    <br>
<p>The start date of the milestone in the current PHP date format. Must be before or equal to end_date. Example: <code>2025-06-10</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_date"                data-endpoint="POSTapi-master-panel-create-milestone"
               value="2025-06-20"
               data-component="body">
    <br>
<p>The end date of the milestone. Example: <code>2025-06-20</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cost</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cost"                data-endpoint="POSTapi-master-panel-create-milestone"
               value="2000.50"
               data-component="body">
    <br>
<p>The cost of the milestone. Example: <code>2000.50</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-master-panel-create-milestone"
               value="All screens finalized and approved by client."
               data-component="body">
    <br>
<p>The description of the milestone (optional). Example: <code>All screens finalized and approved by client.</code></p>
        </div>
        </form>

                    <h2 id="project-milestones-PUTapi-master-panel-update-milestone--id-">Update a milestone.</h2>

<p>
</p>

<p>This endpoint updates a milestone record with the given details. The request must include valid dates in <code>d-m-Y</code> format (e.g., &quot;21-05-2025&quot;).</p>

<span id="example-requests-PUTapi-master-panel-update-milestone--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/master-panel/update-milestone/consequatur" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json" \
    --data "{
    \"title\": \"\\\"Design Phase\\\"\",
    \"status\": \"\\\"incomplete\\\"\",
    \"start_date\": \"\\\"21-05-2025\\\"\",
    \"end_date\": \"\\\"25-05-2025\\\"\",
    \"cost\": \"\\\"2500.00\\\"\",
    \"progress\": \"\\\"75\\\"\",
    \"description\": \"\\\"Initial development phase.\\\"\",
    \"id\": 5
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/update-milestone/consequatur"
);

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

let body = {
    "title": "\"Design Phase\"",
    "status": "\"incomplete\"",
    "start_date": "\"21-05-2025\"",
    "end_date": "\"25-05-2025\"",
    "cost": "\"2500.00\"",
    "progress": "\"75\"",
    "description": "\"Initial development phase.\"",
    "id": 5
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-master-panel-update-milestone--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Milestone updated successfully.&quot;,
    &quot;id&quot;: 5,
    &quot;type&quot;: &quot;milestone&quot;,
    &quot;parent_type&quot;: &quot;project&quot;,
    &quot;parent_id&quot;: 3
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Invalid date format.&quot;,
    &quot;exception&quot;: &quot;The separation symbol could not be found&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Milestone] 99&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Start date cannot be after end date.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;title&quot;: [
            &quot;The title field is required.&quot;
        ],
        &quot;start_date&quot;: [
            &quot;The start date must be a valid date.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Milestone couldn&#039;t be updated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-master-panel-update-milestone--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-master-panel-update-milestone--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-master-panel-update-milestone--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-master-panel-update-milestone--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-master-panel-update-milestone--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-master-panel-update-milestone--id-" data-method="PUT"
      data-path="api/master-panel/update-milestone/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-master-panel-update-milestone--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-master-panel-update-milestone--id-"
                    onclick="tryItOut('PUTapi-master-panel-update-milestone--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-master-panel-update-milestone--id-"
                    onclick="cancelTryOut('PUTapi-master-panel-update-milestone--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-master-panel-update-milestone--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/master-panel/update-milestone/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization"                data-endpoint="PUTapi-master-panel-update-milestone--id-"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-master-panel-update-milestone--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="PUTapi-master-panel-update-milestone--id-"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-master-panel-update-milestone--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-master-panel-update-milestone--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the update milestone. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-master-panel-update-milestone--id-"
               value=""Design Phase""
               data-component="body">
    <br>
<p>The title of the milestone. Example: <code>"Design Phase"</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-master-panel-update-milestone--id-"
               value=""incomplete""
               data-component="body">
    <br>
<p>The status of the milestone (e.g., &quot;incomplete&quot;, &quot;complete&quot;). Example: <code>"incomplete"</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="PUTapi-master-panel-update-milestone--id-"
               value=""21-05-2025""
               data-component="body">
    <br>
<p>Must be a valid date in d-m-Y format and before or equal to end_date. Example: <code>"21-05-2025"</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_date"                data-endpoint="PUTapi-master-panel-update-milestone--id-"
               value=""25-05-2025""
               data-component="body">
    <br>
<p>Must be a valid date in d-m-Y format. Example: <code>"25-05-2025"</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cost</code></b>&nbsp;&nbsp;
<small>decimal</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cost"                data-endpoint="PUTapi-master-panel-update-milestone--id-"
               value=""2500.00""
               data-component="body">
    <br>
<p>Must be a number (integer or decimal). Example: <code>"2500.00"</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>progress</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="progress"                data-endpoint="PUTapi-master-panel-update-milestone--id-"
               value=""75""
               data-component="body">
    <br>
<p>Progress information. Can be a percentage string or descriptive. Example: <code>"75"</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-master-panel-update-milestone--id-"
               value=""Initial development phase.""
               data-component="body">
    <br>
<p>Optional description of the milestone. Example: <code>"Initial development phase."</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-master-panel-update-milestone--id-"
               value="5"
               data-component="body">
    <br>
<p>The ID of the milestone to update. Example: <code>5</code></p>
        </div>
        </form>

                    <h2 id="project-milestones-DELETEapi-master-panel-delete-milestone--id-">Delete a specific milestone.</h2>

<p>
</p>

<p>This endpoint deletes a single milestone by its ID. The milestone must exist. Once deleted, a confirmation message with related metadata is returned.</p>

<span id="example-requests-DELETEapi-master-panel-delete-milestone--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/delete-milestone/3" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/delete-milestone/3"
);

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-delete-milestone--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Milestone deleted successfully.&quot;,
    &quot;id&quot;: 3,
    &quot;title&quot;: &quot;Design Phase&quot;,
    &quot;type&quot;: &quot;milestone&quot;,
    &quot;parent_type&quot;: &quot;project&quot;,
    &quot;parent_id&quot;: 7
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Milestone] 99&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;An unexpected error occurred while deleting the milestone.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-delete-milestone--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-delete-milestone--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-delete-milestone--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-delete-milestone--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-delete-milestone--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-delete-milestone--id-" data-method="DELETE"
      data-path="api/master-panel/delete-milestone/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-delete-milestone--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-delete-milestone--id-"
                    onclick="tryItOut('DELETEapi-master-panel-delete-milestone--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-delete-milestone--id-"
                    onclick="cancelTryOut('DELETEapi-master-panel-delete-milestone--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-delete-milestone--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/delete-milestone/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization"                data-endpoint="DELETEapi-master-panel-delete-milestone--id-"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-delete-milestone--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="DELETEapi-master-panel-delete-milestone--id-"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-delete-milestone--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-master-panel-delete-milestone--id-"
               value="3"
               data-component="url">
    <br>
<p>The ID of the milestone to delete. Example: <code>3</code></p>
            </div>
                    </form>

                <h1 id="project-status-and-priority">Project status and priority</h1>

    <p>This endpoint updates the status of a specified project.
The status change is recorded in the status timeline,
and notifications are sent to related users and clients.</p>
<p>You can include an optional <code>note</code> with the status update.</p>
<p>If <code>isApi</code> request parameter is true, response will use
the standardized API response format.</p>

                                <h2 id="project-status-and-priority-POSTapi-master-panel-save-view-preference">Save the user&#039;s default view preference for projects.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint allows the authenticated user or client to set their preferred default view (e.g., kanban, list, or calendar) for how projects are displayed in the UI.
The view preference is stored in the <code>user_client_preferences</code> table.</p>

<span id="example-requests-POSTapi-master-panel-save-view-preference">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/save-view-preference" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json" \
    --data "{
    \"view\": \"kanban\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/save-view-preference"
);

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

let body = {
    "view": "kanban"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-save-view-preference">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Default View Set Successfully.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Something Went Wrong.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;view&quot;: [
            &quot;The view field is required.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-save-view-preference" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-save-view-preference"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-save-view-preference"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-save-view-preference" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-save-view-preference">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-save-view-preference" data-method="POST"
      data-path="api/master-panel/save-view-preference"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-save-view-preference', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-save-view-preference"
                    onclick="tryItOut('POSTapi-master-panel-save-view-preference');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-save-view-preference"
                    onclick="cancelTryOut('POSTapi-master-panel-save-view-preference');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-save-view-preference"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/save-view-preference</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-master-panel-save-view-preference"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-save-view-preference"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="POSTapi-master-panel-save-view-preference"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-save-view-preference"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>view</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="view"                data-endpoint="POSTapi-master-panel-save-view-preference"
               value="kanban"
               data-component="body">
    <br>
<p>The preferred default view type. Valid options might include &quot;kanban&quot;, &quot;list&quot;, or &quot;calendar&quot;. Example: <code>kanban</code></p>
        </div>
        </form>

                    <h2 id="project-status-and-priority-PUTapi-master-panel-update-status--id-">Update the status of a project.</h2>

<p>
</p>



<span id="example-requests-PUTapi-master-panel-update-status--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/master-panel/update-status/consequatur" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json" \
    --data "{
    \"id\": 438,
    \"statusId\": 5,
    \"note\": \"consequatur\",
    \"isApi\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/update-status/consequatur"
);

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

let body = {
    "id": 438,
    "statusId": 5,
    "note": "consequatur",
    "isApi": false
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-master-panel-update-status--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Status updated successfully.&quot;,
    &quot;id&quot;: 438,
    &quot;type&quot;: &quot;project&quot;,
    &quot;old_status&quot;: &quot;Default&quot;,
    &quot;new_status&quot;: &quot;Completed&quot;,
    &quot;activity_message&quot;: &quot;John Doe updated project status from Default to Completed&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 438,
        &quot;title&quot;: &quot;Res Test&quot;,
        &quot;status&quot;: &quot;Completed&quot;,
        &quot;priority&quot;: &quot;High&quot;,
        &quot;users&quot;: [
            {
                &quot;id&quot;: 7,
                &quot;first_name&quot;: &quot;John&quot;,
                &quot;last_name&quot;: &quot;Doe&quot;,
                &quot;photo&quot;: &quot;https://example.com/photos/johndoe.png&quot;
            }
        ],
        &quot;clients&quot;: [
            {
                &quot;id&quot;: 103,
                &quot;first_name&quot;: &quot;Client&quot;,
                &quot;last_name&quot;: &quot;Name&quot;,
                &quot;photo&quot;: &quot;https://example.com/photos/no-image.jpg&quot;
            }
        ],
        &quot;tags&quot;: [
            {
                &quot;id&quot;: 45,
                &quot;title&quot;: &quot;Important&quot;
            }
        ],
        &quot;start_date&quot;: &quot;07-08-2024 14:38:51&quot;,
        &quot;end_date&quot;: &quot;12-08-2024 13:49:33&quot;,
        &quot;budget&quot;: &quot;1000.00&quot;,
        &quot;task_accessibility&quot;: &quot;assigned_users&quot;,
        &quot;description&quot;: null,
        &quot;note&quot;: &quot;Project on track&quot;,
        &quot;favorite&quot;: 1,
        &quot;created_at&quot;: &quot;07-08-2024 14:38:51&quot;,
        &quot;updated_at&quot;: &quot;12-08-2024 13:49:33&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;You are not authorized to set this status.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Status couldn&#039;t be updated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Error: Exception message here&quot;,
    &quot;line&quot;: 123,
    &quot;file&quot;: &quot;/path/to/file.php&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-master-panel-update-status--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-master-panel-update-status--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-master-panel-update-status--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-master-panel-update-status--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-master-panel-update-status--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-master-panel-update-status--id-" data-method="PUT"
      data-path="api/master-panel/update-status/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-master-panel-update-status--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-master-panel-update-status--id-"
                    onclick="tryItOut('PUTapi-master-panel-update-status--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-master-panel-update-status--id-"
                    onclick="cancelTryOut('PUTapi-master-panel-update-status--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-master-panel-update-status--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/master-panel/update-status/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization"                data-endpoint="PUTapi-master-panel-update-status--id-"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-master-panel-update-status--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="PUTapi-master-panel-update-status--id-"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-master-panel-update-status--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-master-panel-update-status--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the update status. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-master-panel-update-status--id-"
               value="438"
               data-component="body">
    <br>
<p>The ID of the project to update. Example: <code>438</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>statusId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="statusId"                data-endpoint="PUTapi-master-panel-update-status--id-"
               value="5"
               data-component="body">
    <br>
<p>The ID of the new status to set. Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>note</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="note"                data-endpoint="PUTapi-master-panel-update-status--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Optional note about the status update. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-master-panel-update-status--id-" style="display: none">
            <input type="radio" name="isApi"
                   value="true"
                   data-endpoint="PUTapi-master-panel-update-status--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-master-panel-update-status--id-" style="display: none">
            <input type="radio" name="isApi"
                   value="false"
                   data-endpoint="PUTapi-master-panel-update-status--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Optional flag to specify if request is API (true or false). Defaults to false. Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="project-status-and-priority-PUTapi-master-panel-update-priority--id-">Update the priority of a project.</h2>

<p>
</p>



<span id="example-requests-PUTapi-master-panel-update-priority--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/master-panel/update-priority/consequatur" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json" \
    --data "{
    \"id\": 123,
    \"priorityId\": \"5\",
    \"note\": \"\\\"Urgent priority needed\\\"\",
    \"isApi\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/update-priority/consequatur"
);

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

let body = {
    "id": 123,
    "priorityId": "5",
    "note": "\"Urgent priority needed\"",
    "isApi": false
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-master-panel-update-priority--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;error&quot;: false,
  &quot;message&quot;: &quot;Priority updated successfully.&quot;,
  &quot;id&quot;: 123,
  &quot;type&quot;: &quot;project&quot;,
  &quot;old_priority&quot;: &quot;Medium&quot;,
  &quot;new_priority&quot;: &quot;High&quot;,
  &quot;activity_message&quot;: &quot;John Doe updated project priority from Medium to High&quot;,
  &quot;data&quot;: {
    // Detailed formatted project data as returned by formatProject helper
  }
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;You are not authorized to update this priority.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;id&quot;: [
            &quot;The selected id is invalid.&quot;
        ],
        &quot;priorityId&quot;: [
            &quot;The selected priority id is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Error: Exception message here&quot;,
    &quot;line&quot;: 45,
    &quot;file&quot;: &quot;/path/to/file.php&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-master-panel-update-priority--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-master-panel-update-priority--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-master-panel-update-priority--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-master-panel-update-priority--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-master-panel-update-priority--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-master-panel-update-priority--id-" data-method="PUT"
      data-path="api/master-panel/update-priority/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-master-panel-update-priority--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-master-panel-update-priority--id-"
                    onclick="tryItOut('PUTapi-master-panel-update-priority--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-master-panel-update-priority--id-"
                    onclick="cancelTryOut('PUTapi-master-panel-update-priority--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-master-panel-update-priority--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/master-panel/update-priority/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization"                data-endpoint="PUTapi-master-panel-update-priority--id-"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-master-panel-update-priority--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="PUTapi-master-panel-update-priority--id-"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-master-panel-update-priority--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-master-panel-update-priority--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the update priority. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-master-panel-update-priority--id-"
               value="123"
               data-component="body">
    <br>
<p>The ID of the project to update. Example: <code>123</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>priorityId</code></b>&nbsp;&nbsp;
<small>int|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="priorityId"                data-endpoint="PUTapi-master-panel-update-priority--id-"
               value="5"
               data-component="body">
    <br>
<p>The ID of the new priority to set. Pass null to reset. Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>note</code></b>&nbsp;&nbsp;
<small>string|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="note"                data-endpoint="PUTapi-master-panel-update-priority--id-"
               value=""Urgent priority needed""
               data-component="body">
    <br>
<p>Optional note related to the priority update. Example: <code>"Urgent priority needed"</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-master-panel-update-priority--id-" style="display: none">
            <input type="radio" name="isApi"
                   value="true"
                   data-endpoint="PUTapi-master-panel-update-priority--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-master-panel-update-priority--id-" style="display: none">
            <input type="radio" name="isApi"
                   value="false"
                   data-endpoint="PUTapi-master-panel-update-priority--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Optional flag (true/false) indicating if the request expects an API-formatted response. Default is false. Example: <code>false</code></p>
        </div>
        </form>

                <h1 id="project-comments">Project Comments</h1>

    

                                <h2 id="project-comments-POSTapi-master-panel-comments">Add a comment to a model (e.g., project, task) with optional attachments and user mentions.</h2>

<p>
</p>

<p>This endpoint allows the authenticated user to post a comment on any model (like a project or task)
using polymorphic relationships. It supports file attachments (images, PDFs, documents)
and also handles user mentions (e.g., @username), sending notifications to mentioned users.</p>

<span id="example-requests-POSTapi-master-panel-comments">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/comments" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "model_type=App\Models\Project"\
    --form "model_id=14"\
    --form "content=This is a comment with a mention to @jane."\
    --form "parent_id=5"\
    --form "attachments[]=@C:\Users\Dikshita\AppData\Local\Temp\phpBEF6.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/comments"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('model_type', 'App\Models\Project');
body.append('model_id', '14');
body.append('content', 'This is a comment with a mention to @jane.');
body.append('parent_id', '5');
body.append('attachments[]', document.querySelector('input[name="attachments[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-comments">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Comment Added Successfully&quot;,
    &quot;comment&quot;: {
        &quot;id&quot;: 21,
        &quot;commentable_type&quot;: &quot;App\\Models\\Project&quot;,
        &quot;commentable_id&quot;: 14,
        &quot;content&quot;: &quot;This is a comment with mention to &lt;a href=&#039;/users/5&#039;&gt;@jane&lt;/a&gt;&quot;,
        &quot;user_id&quot;: 1,
        &quot;parent_id&quot;: null,
        &quot;created_at&quot;: &quot;2025-06-12T10:31:02.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-12T10:31:02.000000Z&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 1,
            &quot;first_name&quot;: &quot;John&quot;,
            &quot;last_name&quot;: &quot;Doe&quot;,
            &quot;email&quot;: &quot;john@example.com&quot;
        },
        &quot;attachments&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;comment_id&quot;: 21,
                &quot;file_name&quot;: &quot;screenshot.png&quot;,
                &quot;file_path&quot;: &quot;comment_attachments/screenshot.png&quot;,
                &quot;file_type&quot;: &quot;image/png&quot;
            }
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Validation failed.&quot;,
    &quot;errors&quot;: {
        &quot;model_type&quot;: [
            &quot;The model_type field is required.&quot;
        ],
        &quot;content&quot;: [
            &quot;The content field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;An error occurred: [error details]&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-comments" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-comments"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-comments"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-comments">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-comments" data-method="POST"
      data-path="api/master-panel/comments"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-comments', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-comments"
                    onclick="tryItOut('POSTapi-master-panel-comments');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-comments"
                    onclick="cancelTryOut('POSTapi-master-panel-comments');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-comments"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/comments</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-comments"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-comments"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>model_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="model_type"                data-endpoint="POSTapi-master-panel-comments"
               value="App\Models\Project"
               data-component="body">
    <br>
<p>The fully qualified model class name. Example: <code>App\Models\Project</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>model_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="model_id"                data-endpoint="POSTapi-master-panel-comments"
               value="14"
               data-component="body">
    <br>
<p>The ID of the model being commented on. Example: <code>14</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="POSTapi-master-panel-comments"
               value="This is a comment with a mention to @jane."
               data-component="body">
    <br>
<p>The comment content. Mentions like &quot;@john&quot; are supported. Example: <code>This is a comment with a mention to @jane.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>parent_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="parent_id"                data-endpoint="POSTapi-master-panel-comments"
               value="5"
               data-component="body">
    <br>
<p>Optional. The ID of the parent comment (for replies). Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>attachments</code></b>&nbsp;&nbsp;
<small>file[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="attachments[0]"                data-endpoint="POSTapi-master-panel-comments"
               data-component="body">
        <input type="file" style="display: none"
               name="attachments[1]"                data-endpoint="POSTapi-master-panel-comments"
               data-component="body">
    <br>
<p>Optional. Files to attach with the comment (jpg, jpeg, png, pdf, xlsx, txt, docx). Max size: 2MB per file.</p>
        </div>
        </form>

                <h1 id="task-management">Task Management</h1>

    <p>Validates and updates the specified task. Handles status changes,
reminders, recurring tasks, user assignments, and sends notifications.</p>

                                <h2 id="task-management-GETapi-master-panel-tasks-list-api--id--">List or Get Task(s)

This endpoint returns a paginated list of tasks, or a single task if an ID is provided.
It supports advanced filtering, searching, sorting, and eager loading of related entities
such as users, project, status, priority, reminders, and recurring task details.

If the ID is numeric, it returns a single formatted task object.
If the ID follows the format `user_{id}` or `project_{id}`, it filters tasks belonging
to the specified user or project.</h2>

<p>
</p>



<span id="example-requests-GETapi-master-panel-tasks-list-api--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/tasks/list-api/25?isApi=&amp;search=Design&amp;sort=title&amp;order=consequatur&amp;status_ids%5B%5D=1&amp;priority_ids%5B%5D=2&amp;user_ids%5B%5D=3&amp;client_ids%5B%5D=5&amp;project_ids%5B%5D=2&amp;task_start_date_from=2025-06-01&amp;task_start_date_to=2025-06-30&amp;task_end_date_from=2025-06-05&amp;task_end_date_to=2025-06-20&amp;limit=20" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/tasks/list-api/25"
);

const params = {
    "isApi": "0",
    "search": "Design",
    "sort": "title",
    "order": "consequatur",
    "status_ids[]": "1",
    "priority_ids[]": "2",
    "user_ids[]": "3",
    "client_ids[]": "5",
    "project_ids[]": "2",
    "task_start_date_from": "2025-06-01",
    "task_start_date_to": "2025-06-30",
    "task_end_date_from": "2025-06-05",
    "task_end_date_to": "2025-06-20",
    "limit": "20",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-tasks-list-api--id--">
            <blockquote>
            <p>Example response (200, Single task response):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 25,
    &quot;workspace_id&quot;: 2,
    &quot;title&quot;: &quot;Test Task Title&quot;,
    &quot;status&quot;: &quot;Open&quot;,
    &quot;status_id&quot;: 1,
    &quot;priority&quot;: &quot;low&quot;,
    &quot;priority_id&quot;: 2,
    &quot;users&quot;: [
        {
            &quot;id&quot;: 2,
            &quot;first_name&quot;: &quot;herry&quot;,
            &quot;last_name&quot;: &quot;porter&quot;,
            &quot;email&quot;: &quot;admin@gmail.com&quot;,
            &quot;photo&quot;: &quot;http://localhost:8000/storage/photos/no-image.jpg&quot;
        }
    ],
    &quot;user_id&quot;: [
        2
    ],
    &quot;clients&quot;: [],
    &quot;start_date&quot;: &quot;2025-06-01&quot;,
    &quot;due_date&quot;: &quot;2025-06-10&quot;,
    &quot;project&quot;: &quot;favorite project&quot;,
    &quot;project_id&quot;: 2,
    &quot;description&quot;: &quot;This is a test task description.&quot;,
    &quot;note&quot;: &quot;Optional note about the task.&quot;,
    &quot;favorite&quot;: 0,
    &quot;client_can_discuss&quot;: null,
    &quot;created_at&quot;: &quot;2025-05-28&quot;,
    &quot;updated_at&quot;: &quot;2025-05-28&quot;,
    &quot;enable_reminder&quot;: 1,
    &quot;last_reminder_sent&quot;: null,
    &quot;frequency_type&quot;: &quot;weekly&quot;,
    &quot;day_of_week&quot;: 3,
    &quot;day_of_month&quot;: null,
    &quot;time_of_day&quot;: &quot;14:30:00&quot;,
    &quot;enable_recurring_task&quot;: 1,
    &quot;recurrence_frequency&quot;: &quot;monthly&quot;,
    &quot;recurrence_day_of_week&quot;: null,
    &quot;recurrence_day_of_month&quot;: 15,
    &quot;recurrence_month_of_year&quot;: null,
    &quot;recurrence_starts_from&quot;: &quot;2025-06-01&quot;,
    &quot;recurrence_occurrences&quot;: 6,
    &quot;completed_occurrences&quot;: null,
    &quot;billing_type&quot;: &quot;billable&quot;,
    &quot;completion_percentage&quot;: 0,
    &quot;task_list_id&quot;: null
}</code>
 </pre>
            <blockquote>
            <p>Example response (200, Paginated task list):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;status&quot;: false,
  &quot;message&quot;: &quot;Tasks retrieved successfully.&quot;,
  &quot;data&quot;: {
    &quot;total&quot;: 25,
    &quot;data&quot;: [
      {
        &quot;id&quot;: 25,
        &quot;workspace_id&quot;: 2,
        &quot;title&quot;: &quot;Test Task Title&quot;,
        &quot;status&quot;: &quot;Open&quot;,
        ...
      }
    ]
  }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Task not found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Task not found&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Project or User not found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Project not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-tasks-list-api--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-tasks-list-api--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-tasks-list-api--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-tasks-list-api--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-tasks-list-api--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-tasks-list-api--id--" data-method="GET"
      data-path="api/master-panel/tasks/list-api/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-tasks-list-api--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-tasks-list-api--id--"
                    onclick="tryItOut('GETapi-master-panel-tasks-list-api--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-tasks-list-api--id--"
                    onclick="cancelTryOut('GETapi-master-panel-tasks-list-api--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-tasks-list-api--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/tasks/list-api/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-tasks-list-api--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-tasks-list-api--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-master-panel-tasks-list-api--id--"
               value="25"
               data-component="url">
    <br>
<p>int|string Optional. Numeric task ID to fetch a single task, or <code>user_{id}</code>, <code>project_{id}</code> to filter by user/project. Example: <code>25</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="GETapi-master-panel-tasks-list-api--id--" style="display: none">
            <input type="radio" name="isApi"
                   value="1"
                   data-endpoint="GETapi-master-panel-tasks-list-api--id--"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-master-panel-tasks-list-api--id--" style="display: none">
            <input type="radio" name="isApi"
                   value="0"
                   data-endpoint="GETapi-master-panel-tasks-list-api--id--"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Optional. Indicate if it's an API call. Default: false Example: <code>false</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>search</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="search"                data-endpoint="GETapi-master-panel-tasks-list-api--id--"
               value="Design"
               data-component="query">
    <br>
<p>Optional. Search tasks by title or ID. Example: <code>Design</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sort</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sort"                data-endpoint="GETapi-master-panel-tasks-list-api--id--"
               value="title"
               data-component="query">
    <br>
<p>Optional. Field to sort by. Default: id. Example: <code>title</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="order"                data-endpoint="GETapi-master-panel-tasks-list-api--id--"
               value="consequatur"
               data-component="query">
    <br>
<p>Optional. Sorting order: ASC or DESC. Default: DESC Example: <code>consequatur</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>status_ids[]</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="status_ids.0"                data-endpoint="GETapi-master-panel-tasks-list-api--id--"
               value="1"
               data-component="query">
    <br>
<p>Optional. Filter tasks by status ID(s). Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>priority_ids[]</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="priority_ids.0"                data-endpoint="GETapi-master-panel-tasks-list-api--id--"
               value="2"
               data-component="query">
    <br>
<p>Optional. Filter tasks by priority ID(s). Example: <code>2</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_ids[]</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_ids.0"                data-endpoint="GETapi-master-panel-tasks-list-api--id--"
               value="3"
               data-component="query">
    <br>
<p>Optional. Filter tasks assigned to these user ID(s). Example: <code>3</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>client_ids[]</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client_ids.0"                data-endpoint="GETapi-master-panel-tasks-list-api--id--"
               value="5"
               data-component="query">
    <br>
<p>Optional. Filter tasks linked to clients via project(s). Example: <code>5</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>project_ids[]</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="project_ids.0"                data-endpoint="GETapi-master-panel-tasks-list-api--id--"
               value="2"
               data-component="query">
    <br>
<p>Optional. Filter tasks by project ID(s). Example: <code>2</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>task_start_date_from</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="task_start_date_from"                data-endpoint="GETapi-master-panel-tasks-list-api--id--"
               value="2025-06-01"
               data-component="query">
    <br>
<p>date Optional. Filter tasks starting from this date. Format: Y-m-d. Example: <code>2025-06-01</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>task_start_date_to</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="task_start_date_to"                data-endpoint="GETapi-master-panel-tasks-list-api--id--"
               value="2025-06-30"
               data-component="query">
    <br>
<p>date Optional. Filter tasks starting up to this date. Format: Y-m-d. Example: <code>2025-06-30</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>task_end_date_from</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="task_end_date_from"                data-endpoint="GETapi-master-panel-tasks-list-api--id--"
               value="2025-06-05"
               data-component="query">
    <br>
<p>date Optional. Filter tasks due from this date. Format: Y-m-d. Example: <code>2025-06-05</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>task_end_date_to</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="task_end_date_to"                data-endpoint="GETapi-master-panel-tasks-list-api--id--"
               value="2025-06-20"
               data-component="query">
    <br>
<p>date Optional. Filter tasks due up to this date. Format: Y-m-d. Example: <code>2025-06-20</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>limit</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="limit"                data-endpoint="GETapi-master-panel-tasks-list-api--id--"
               value="20"
               data-component="query">
    <br>
<p>Optional. Number of results per page. Default: 10. Example: <code>20</code></p>
            </div>
                </form>

                    <h2 id="task-management-POSTapi-master-panel-create-tasks">Create a new task</h2>

<p>
</p>

<p>This endpoint allows you to create a new task within a workspace and assign it to users.
It supports additional features like setting reminders and recurring schedules.</p>

<span id="example-requests-POSTapi-master-panel-create-tasks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/create-tasks" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"Create new onboarding flow\",
    \"status_id\": 1,
    \"start_date\": \"2025-06-01\",
    \"due_date\": \"2025-06-06\",
    \"description\": \"Implement onboarding UI and logic.\",
    \"project\": 15,
    \"priority_id\": 2,
    \"note\": \"Coordinate with HR and DevOps.\",
    \"billing_type\": \"billable\",
    \"completion_percentage\": 0,
    \"users_id\": [
        2,
        3
    ],
    \"enable_reminder\": \"on\",
    \"frequency_type\": \"weekly\",
    \"day_of_week\": 2,
    \"day_of_month\": 15,
    \"time_of_day\": \"09:00\",
    \"enable_recurring_task\": \"on\",
    \"recurrence_frequency\": \"monthly\",
    \"recurrence_day_of_week\": 3,
    \"recurrence_day_of_month\": 10,
    \"recurrence_month_of_year\": 6,
    \"recurrence_starts_from\": \"2025-06-03\",
    \"recurrence_occurrences\": 5,
    \"task_list_id\": 1
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/create-tasks"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "Create new onboarding flow",
    "status_id": 1,
    "start_date": "2025-06-01",
    "due_date": "2025-06-06",
    "description": "Implement onboarding UI and logic.",
    "project": 15,
    "priority_id": 2,
    "note": "Coordinate with HR and DevOps.",
    "billing_type": "billable",
    "completion_percentage": 0,
    "users_id": [
        2,
        3
    ],
    "enable_reminder": "on",
    "frequency_type": "weekly",
    "day_of_week": 2,
    "day_of_month": 15,
    "time_of_day": "09:00",
    "enable_recurring_task": "on",
    "recurrence_frequency": "monthly",
    "recurrence_day_of_week": 3,
    "recurrence_day_of_month": 10,
    "recurrence_month_of_year": 6,
    "recurrence_starts_from": "2025-06-03",
    "recurrence_occurrences": 5,
    "task_list_id": 1
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-create-tasks">
            <blockquote>
            <p>Example response (200, Task created successfully):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Task created successfully.&quot;,
    &quot;id&quot;: 28,
    &quot;type&quot;: &quot;task&quot;,
    &quot;parent_id&quot;: 15,
    &quot;parent_type&quot;: &quot;project&quot;,
    &quot;Data&quot;: {
        &quot;id&quot;: 28,
        &quot;workspace_id&quot;: 2,
        &quot;title&quot;: &quot;Create new onboarding flow&quot;,
        &quot;status&quot;: &quot;Open&quot;,
        &quot;status_id&quot;: 1,
        &quot;priority&quot;: &quot;low&quot;,
        &quot;priority_id&quot;: 2,
        &quot;users&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;first_name&quot;: &quot;herry&quot;,
                &quot;last_name&quot;: &quot;porter&quot;,
                &quot;email&quot;: &quot;admin@gmail.com&quot;,
                &quot;photo&quot;: &quot;http://localhost:8000/storage/photos/no-image.jpg&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;first_name&quot;: &quot;John&quot;,
                &quot;last_name&quot;: &quot;Doe&quot;,
                &quot;email&quot;: &quot;admin2@gmail.com&quot;,
                &quot;photo&quot;: &quot;http://localhost:8000/storage/photos/no-image.jpg&quot;
            }
        ],
        &quot;user_id&quot;: [
            2,
            3
        ],
        &quot;clients&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;first_name&quot;: &quot;jerry&quot;,
                &quot;last_name&quot;: &quot;ginny&quot;,
                &quot;email&quot;: &quot;jg@gmail.com&quot;,
                &quot;photo&quot;: &quot;http://localhost:8000/storage/photos/gqHsvgmDBCbtf843SRYx31e6Zl51amPZY8eG05FB.jpg&quot;
            }
        ],
        &quot;start_date&quot;: &quot;2015-01-01&quot;,
        &quot;due_date&quot;: &quot;2025-06-06&quot;,
        &quot;project&quot;: &quot;New Project Title&quot;,
        &quot;project_id&quot;: 15,
        &quot;description&quot;: &quot;Implement onboarding UI and logic.&quot;,
        &quot;note&quot;: &quot;Coordinate with HR and DevOps.&quot;,
        &quot;favorite&quot;: 0,
        &quot;client_can_discuss&quot;: null,
        &quot;created_at&quot;: &quot;2025-06-03&quot;,
        &quot;updated_at&quot;: &quot;2025-06-03&quot;,
        &quot;enable_reminder&quot;: 1,
        &quot;last_reminder_sent&quot;: null,
        &quot;frequency_type&quot;: &quot;weekly&quot;,
        &quot;day_of_week&quot;: 2,
        &quot;day_of_month&quot;: 15,
        &quot;time_of_day&quot;: &quot;09:00:00&quot;,
        &quot;enable_recurring_task&quot;: 1,
        &quot;recurrence_frequency&quot;: &quot;monthly&quot;,
        &quot;recurrence_day_of_week&quot;: 3,
        &quot;recurrence_day_of_month&quot;: 10,
        &quot;recurrence_month_of_year&quot;: 6,
        &quot;recurrence_starts_from&quot;: &quot;2025-06-03&quot;,
        &quot;recurrence_occurrences&quot;: 5,
        &quot;completed_occurrences&quot;: null,
        &quot;billing_type&quot;: &quot;billable&quot;,
        &quot;completion_percentage&quot;: 0,
        &quot;task_list_id&quot;: null
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, Validation error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Invalid date format. Please use yyyy-mm-dd.&quot;,
    &quot;exception&quot;: &quot;InvalidArgumentException message here...&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500, Unexpected server error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;An error occurred while creating the task. SQLSTATE[23000]: Integrity constraint violation: 1452...&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-create-tasks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-create-tasks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-create-tasks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-create-tasks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-create-tasks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-create-tasks" data-method="POST"
      data-path="api/master-panel/create-tasks"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-create-tasks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-create-tasks"
                    onclick="tryItOut('POSTapi-master-panel-create-tasks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-create-tasks"
                    onclick="cancelTryOut('POSTapi-master-panel-create-tasks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-create-tasks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/create-tasks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="Create new onboarding flow"
               data-component="body">
    <br>
<p>The title of the task. Example: <code>Create new onboarding flow</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="status_id"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="1"
               data-component="body">
    <br>
<p>The ID of the task status. Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="2025-06-01"
               data-component="body">
    <br>
<p>The start date in <code>YYYY-MM-DD</code> format. Example: <code>2025-06-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>due_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="due_date"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="2025-06-06"
               data-component="body">
    <br>
<p>The due date in <code>YYYY-MM-DD</code> format. Example: <code>2025-06-06</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="Implement onboarding UI and logic."
               data-component="body">
    <br>
<p>The description of the task. Example: <code>Implement onboarding UI and logic.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>project</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="project"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="15"
               data-component="body">
    <br>
<p>The ID of the project to which the task belongs. Example: <code>15</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>priority_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="priority_id"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="2"
               data-component="body">
    <br>
<p>The ID of the priority level. Must exist in priorities table. Example: <code>2</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>note</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="note"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="Coordinate with HR and DevOps."
               data-component="body">
    <br>
<p>Optional note for the task. Example: <code>Coordinate with HR and DevOps.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>billing_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="billing_type"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="billable"
               data-component="body">
    <br>
<p>The billing type (none, billable, non-billable). Example: <code>billable</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>completion_percentage</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="completion_percentage"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="0"
               data-component="body">
    <br>
<p>Completion in steps of 10. One of: 0,10,...,100. Example: <code>0</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>users_id</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="users_id[0]"                data-endpoint="POSTapi-master-panel-create-tasks"
               data-component="body">
        <input type="text" style="display: none"
               name="users_id[1]"                data-endpoint="POSTapi-master-panel-create-tasks"
               data-component="body">
    <br>
<p>User IDs assigned to the task.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>enable_reminder</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="enable_reminder"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="on"
               data-component="body">
    <br>
<p>Enable reminders. Must be 'on' if enabled. Example: <code>on</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>frequency_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="frequency_type"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="weekly"
               data-component="body">
    <br>
<p>Frequency of reminder (daily, weekly, monthly). Example: <code>weekly</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>day_of_week</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="day_of_week"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="2"
               data-component="body">
    <br>
<p>Day of the week for reminders (1 = Monday). Example: <code>2</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>day_of_month</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="day_of_month"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="15"
               data-component="body">
    <br>
<p>Day of the month for reminders. Example: <code>15</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>time_of_day</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="time_of_day"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="09:00"
               data-component="body">
    <br>
<p>Time of day for reminder (HH:MM). Example: <code>09:00</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>enable_recurring_task</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="enable_recurring_task"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="on"
               data-component="body">
    <br>
<p>Enable recurring task. Must be 'on' if enabled. Example: <code>on</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recurrence_frequency</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="recurrence_frequency"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="monthly"
               data-component="body">
    <br>
<p>Frequency (daily, weekly, monthly, yearly). Example: <code>monthly</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recurrence_day_of_week</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="recurrence_day_of_week"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="3"
               data-component="body">
    <br>
<p>Day of the week for recurrence. Example: <code>3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recurrence_day_of_month</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="recurrence_day_of_month"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="10"
               data-component="body">
    <br>
<p>Day of the month for recurrence. Example: <code>10</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recurrence_month_of_year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="recurrence_month_of_year"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="6"
               data-component="body">
    <br>
<p>Month of the year for recurrence. Example: <code>6</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recurrence_starts_from</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="recurrence_starts_from"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="2025-06-03"
               data-component="body">
    <br>
<p>Date from which recurrence starts. Must be today or future. Example: <code>2025-06-03</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recurrence_occurrences</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="recurrence_occurrences"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="5"
               data-component="body">
    <br>
<p>Number of occurrences. Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>task_list_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="task_list_id"                data-endpoint="POSTapi-master-panel-create-tasks"
               value="1"
               data-component="body">
    <br>
<p>The ID of the task list (if any). Must exist in task_lists table. Example: <code>1</code></p>
        </div>
        </form>

                    <h2 id="task-management-PUTapi-master-panel-update-tasks--id-">Update an existing task.</h2>

<p>
</p>



<span id="example-requests-PUTapi-master-panel-update-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/master-panel/update-tasks/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"id\": 17,
    \"title\": \"consequatur\",
    \"status_id\": 17,
    \"priority_id\": \"consequatur\",
    \"start_date\": \"consequatur\",
    \"due_date\": \"consequatur\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"note\": \"consequatur\",
    \"billing_type\": \"consequatur\",
    \"completion_percentage\": 17,
    \"enable_reminder\": \"consequatur\",
    \"frequency_type\": \"consequatur\",
    \"day_of_week\": \"consequatur\",
    \"day_of_month\": \"consequatur\",
    \"time_of_day\": \"consequatur\",
    \"enable_recurring_task\": \"consequatur\",
    \"recurrence_frequency\": \"consequatur\",
    \"recurrence_day_of_week\": \"consequatur\",
    \"recurrence_day_of_month\": \"consequatur\",
    \"recurrence_month_of_year\": \"consequatur\",
    \"recurrence_starts_from\": \"consequatur\",
    \"recurrence_occurrences\": \"consequatur\",
    \"user_id\": [
        17
    ],
    \"isApi\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/update-tasks/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 17,
    "title": "consequatur",
    "status_id": 17,
    "priority_id": "consequatur",
    "start_date": "consequatur",
    "due_date": "consequatur",
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "note": "consequatur",
    "billing_type": "consequatur",
    "completion_percentage": 17,
    "enable_reminder": "consequatur",
    "frequency_type": "consequatur",
    "day_of_week": "consequatur",
    "day_of_month": "consequatur",
    "time_of_day": "consequatur",
    "enable_recurring_task": "consequatur",
    "recurrence_frequency": "consequatur",
    "recurrence_day_of_week": "consequatur",
    "recurrence_day_of_month": "consequatur",
    "recurrence_month_of_year": "consequatur",
    "recurrence_starts_from": "consequatur",
    "recurrence_occurrences": "consequatur",
    "user_id": [
        17
    ],
    "isApi": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-master-panel-update-tasks--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;error&quot;: false,
  &quot;message&quot;: &quot;Task updated successfully.&quot;,
  &quot;id&quot;: 23,
  &quot;parent_id&quot;: 2,
  &quot;parent_type&quot;: &quot;project&quot;,
  &quot;data&quot;: {
    &quot;id&quot;: 23,
    &quot;workspace_id&quot;: 2,
    &quot;title&quot;: &quot;Update client onboarding flow&quot;,
    &quot;status&quot;: &quot;Open&quot;,
    &quot;status_id&quot;: 1,
    &quot;priority&quot;: &quot;high&quot;,
    &quot;priority_id&quot;: 1,
    &quot;users&quot;: [
      {
        &quot;id&quot;: 3,
        &quot;first_name&quot;: &quot;John&quot;,
        &quot;last_name&quot;: &quot;Doe&quot;,
        &quot;email&quot;: &quot;admin2@gmail.com&quot;,
        &quot;photo&quot;: &quot;http://localhost:8000/storage/photos/no-image.jpg&quot;
      },
      ...
    ],
    &quot;user_id&quot;: [3,5,6],
    &quot;clients&quot;: [],
    &quot;start_date&quot;: &quot;2025-05-01&quot;,
    &quot;due_date&quot;: &quot;2025-05-31&quot;,
    &quot;project&quot;: &quot;favorite project&quot;,
    &quot;project_id&quot;: 2,
    &quot;description&quot;: &quot;New UI design changes for onboarding.&quot;,
    &quot;note&quot;: &quot;Prioritize before end of Q2.&quot;,
    &quot;favorite&quot;: 0,
    &quot;client_can_discuss&quot;: null,
    &quot;created_at&quot;: &quot;2025-05-28&quot;,
    &quot;updated_at&quot;: &quot;2025-06-03&quot;,
    &quot;enable_reminder&quot;: 1,
    &quot;last_reminder_sent&quot;: null,
    &quot;frequency_type&quot;: &quot;weekly&quot;,
    &quot;day_of_week&quot;: 2,
    &quot;day_of_month&quot;: null,
    &quot;time_of_day&quot;: &quot;10:00:00&quot;,
    &quot;enable_recurring_task&quot;: 1,
    &quot;recurrence_frequency&quot;: &quot;monthly&quot;,
    &quot;recurrence_day_of_week&quot;: 2,
    &quot;recurrence_day_of_month&quot;: 5,
    &quot;recurrence_month_of_year&quot;: 12,
    &quot;recurrence_starts_from&quot;: &quot;2025-06-06&quot;,
    &quot;recurrence_occurrences&quot;: 10,
    &quot;completed_occurrences&quot;: null,
    &quot;billing_type&quot;: &quot;billable&quot;,
    &quot;completion_percentage&quot;: 40,
    &quot;task_list_id&quot;: null
  }
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;You are not authorized to set this status.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;title&quot;: [
            &quot;The title field is required.&quot;
        ],
        &quot;status_id&quot;: [
            &quot;The status id must exist in tasks table.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Invalid date format. Please use yyyy-mm-dd.&quot;,
    &quot;exception&quot;: &quot;DateTimeException message&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;An error occurred while updating the task. &lt;Exception message&gt;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-master-panel-update-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-master-panel-update-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-master-panel-update-tasks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-master-panel-update-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-master-panel-update-tasks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-master-panel-update-tasks--id-" data-method="PUT"
      data-path="api/master-panel/update-tasks/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-master-panel-update-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-master-panel-update-tasks--id-"
                    onclick="tryItOut('PUTapi-master-panel-update-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-master-panel-update-tasks--id-"
                    onclick="cancelTryOut('PUTapi-master-panel-update-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-master-panel-update-tasks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/master-panel/update-tasks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the update task. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="17"
               data-component="body">
    <br>
<p>The ID of the task to update. Must exist in tasks table. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>The title of the task. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="status_id"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="17"
               data-component="body">
    <br>
<p>The status ID for the task. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>priority_id</code></b>&nbsp;&nbsp;
<small>int|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="priority_id"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>The priority ID for the task. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>The start date (YYYY-MM-DD). Must be before or equal to due_date. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>due_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="due_date"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>The due date (YYYY-MM-DD). Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Task description. Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>note</code></b>&nbsp;&nbsp;
<small>string|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="note"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Additional notes. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>billing_type</code></b>&nbsp;&nbsp;
<small>string|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="billing_type"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Billing type. Allowed values: none, billable, non-billable. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>completion_percentage</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="completion_percentage"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="17"
               data-component="body">
    <br>
<p>Completion percentage. Allowed values: 0,10,20,...,100. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>enable_reminder</code></b>&nbsp;&nbsp;
<small>string|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="enable_reminder"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>&quot;on&quot; to enable reminder. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>frequency_type</code></b>&nbsp;&nbsp;
<small>string|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="frequency_type"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Reminder frequency. Allowed values: daily, weekly, monthly. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>day_of_week</code></b>&nbsp;&nbsp;
<small>int|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="day_of_week"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Day of week for weekly reminder (1-7). Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>day_of_month</code></b>&nbsp;&nbsp;
<small>int|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="day_of_month"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Day of month for monthly reminder (1-31). Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>time_of_day</code></b>&nbsp;&nbsp;
<small>string|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="time_of_day"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Reminder time in HH:mm format. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>enable_recurring_task</code></b>&nbsp;&nbsp;
<small>string|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="enable_recurring_task"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>&quot;on&quot; to enable recurring task. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recurrence_frequency</code></b>&nbsp;&nbsp;
<small>string|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="recurrence_frequency"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Recurrence frequency. Allowed: daily, weekly, monthly, yearly. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recurrence_day_of_week</code></b>&nbsp;&nbsp;
<small>int|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="recurrence_day_of_week"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Recurrence day of week (1-7). Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recurrence_day_of_month</code></b>&nbsp;&nbsp;
<small>int|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="recurrence_day_of_month"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Recurrence day of month (1-31). Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recurrence_month_of_year</code></b>&nbsp;&nbsp;
<small>int|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="recurrence_month_of_year"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Recurrence month of year (1-12). Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recurrence_starts_from</code></b>&nbsp;&nbsp;
<small>date|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="recurrence_starts_from"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Recurrence start date (YYYY-MM-DD), must be today or later. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>recurrence_occurrences</code></b>&nbsp;&nbsp;
<small>int|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="recurrence_occurrences"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Number of recurrence occurrences. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id[0]"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               data-component="body">
        <input type="number" style="display: none"
               name="user_id[1]"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               data-component="body">
    <br>
<p>Array of user IDs to assign to the task.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>bool|null</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="isApi"                data-endpoint="PUTapi-master-panel-update-tasks--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Internal flag indicating API request. Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="task-management-DELETEapi-master-panel-delete-tasks--id-">Delete a specific task by ID.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-master-panel-delete-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/delete-tasks/23" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/delete-tasks/23"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-delete-tasks--id-">
            <blockquote>
            <p>Example response (200, Task deleted successfully):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Task deleted successfully.&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 23,
        &quot;title&quot;: &quot;Update client onboarding flow&quot;,
        &quot;parent_id&quot;: 2,
        &quot;parent_type&quot;: &quot;project&quot;,
        &quot;data&quot;: []
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Task not found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Task not found.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (500, Unexpected error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;An unexpected error occurred while deleting the task.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-delete-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-delete-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-delete-tasks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-delete-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-delete-tasks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-delete-tasks--id-" data-method="DELETE"
      data-path="api/master-panel/delete-tasks/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-delete-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-delete-tasks--id-"
                    onclick="tryItOut('DELETEapi-master-panel-delete-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-delete-tasks--id-"
                    onclick="cancelTryOut('DELETEapi-master-panel-delete-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-delete-tasks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/delete-tasks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-delete-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-delete-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-master-panel-delete-tasks--id-"
               value="23"
               data-component="url">
    <br>
<p>The ID of the task to delete. Example: <code>23</code></p>
            </div>
                    </form>

                    <h2 id="task-management-DELETEapi-master-panel-destroy-multiple-tasks">Delete multiple tasks</h2>

<p>
</p>

<p>This endpoint deletes multiple tasks by their IDs. All associated comments and attachments are also permanently removed.</p>

<span id="example-requests-DELETEapi-master-panel-destroy-multiple-tasks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/destroy-multiple-tasks" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"ids\": [
        101,
        102,
        103
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/destroy-multiple-tasks"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "ids": [
        101,
        102,
        103
    ]
};

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-destroy-multiple-tasks">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Task(s) deleted successfully.&quot;,
    &quot;id&quot;: [
        101,
        102
    ],
    &quot;titles&quot;: [
        &quot;Task One&quot;,
        &quot;Task Two&quot;
    ],
    &quot;parent_id&quot;: [
        5,
        6
    ],
    &quot;parent_type&quot;: &quot;project&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;ids.0&quot;: [
            &quot;The selected ids.0 is invalid.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-destroy-multiple-tasks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-destroy-multiple-tasks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-destroy-multiple-tasks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-destroy-multiple-tasks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-destroy-multiple-tasks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-destroy-multiple-tasks" data-method="DELETE"
      data-path="api/master-panel/destroy-multiple-tasks"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-destroy-multiple-tasks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-destroy-multiple-tasks"
                    onclick="tryItOut('DELETEapi-master-panel-destroy-multiple-tasks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-destroy-multiple-tasks"
                    onclick="cancelTryOut('DELETEapi-master-panel-destroy-multiple-tasks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-destroy-multiple-tasks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/destroy-multiple-tasks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-destroy-multiple-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-destroy-multiple-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
 &nbsp;
<br>
<p>An array of task IDs to be deleted.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>*</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ids.*"                data-endpoint="DELETEapi-master-panel-destroy-multiple-tasks"
               value="17"
               data-component="body">
    <br>
<p>The ID of an individual task to delete. Must exist in the tasks table. Example: <code>17</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="task-management-POSTapi-master-panel-tasks--id--duplicate">Duplicate a task.</h2>

<p>
</p>

<p>This endpoint allows you to duplicate an existing task. You can optionally set a custom title for the duplicated task.
Related data such as assigned users will also be duplicated.</p>

<span id="example-requests-POSTapi-master-panel-tasks--id--duplicate">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/tasks/12/duplicate" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"Copy of Design Review Task\",
    \"reload\": \"true\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/tasks/12/duplicate"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "Copy of Design Review Task",
    "reload": "true"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-tasks--id--duplicate">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Task duplicated successfully.&quot;,
    &quot;id&quot;: 12,
    &quot;parent_id&quot;: 5,
    &quot;parent_type&quot;: &quot;project&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Task duplication failed.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-tasks--id--duplicate" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-tasks--id--duplicate"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-tasks--id--duplicate"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-tasks--id--duplicate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-tasks--id--duplicate">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-tasks--id--duplicate" data-method="POST"
      data-path="api/master-panel/tasks/{id}/duplicate"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-tasks--id--duplicate', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-tasks--id--duplicate"
                    onclick="tryItOut('POSTapi-master-panel-tasks--id--duplicate');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-tasks--id--duplicate"
                    onclick="cancelTryOut('POSTapi-master-panel-tasks--id--duplicate');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-tasks--id--duplicate"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/tasks/{id}/duplicate</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-tasks--id--duplicate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-tasks--id--duplicate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="POSTapi-master-panel-tasks--id--duplicate"
               value="12"
               data-component="url">
    <br>
<p>The ID of the task to duplicate. Example: <code>12</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-master-panel-tasks--id--duplicate"
               value="Copy of Design Review Task"
               data-component="body">
    <br>
<p>optional A new title for the duplicated task. If not provided, the system will use a default naming convention. Example: <code>Copy of Design Review Task</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reload</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="reload"                data-endpoint="POSTapi-master-panel-tasks--id--duplicate"
               value="true"
               data-component="body">
    <br>
<p>optional Set to &quot;true&quot; if you want to trigger a session flash message (usually used for reloading UI). Example: <code>true</code></p>
        </div>
        </form>

                <h1 id="task-status-and-performance">Task status and performance</h1>

    <p>This endpoint allows you to update the status of a task by providing the task ID and the new status ID.
It logs the status change in the task's status timeline and notifies assigned users and clients.</p>

                                <h2 id="task-status-and-performance-POSTapi-master-panel-task--id--status--newStatus-">Update the status of a task.</h2>

<p>
</p>



<span id="example-requests-POSTapi-master-panel-task--id--status--newStatus-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/task/25/status/8?isApi=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"id\": \"consequatur\",
    \"statusId\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/task/25/status/8"
);

const params = {
    "isApi": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "consequatur",
    "statusId": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-task--id--status--newStatus-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;error&quot;: false,
  &quot;message&quot;: &quot;Status updated successfully.&quot;,
  &quot;id&quot;: &quot;25&quot;,
  &quot;type&quot;: &quot;task&quot;,
  &quot;activity_message&quot;: &quot;herry porter updated task status from Approved to Completed&quot;,
  &quot;data&quot;: {
    &quot;id&quot;: 25,
    &quot;workspace_id&quot;: 2,
    &quot;title&quot;: &quot;Test Task Title&quot;,
    &quot;status&quot;: &quot;Approved&quot;,
    &quot;status_id&quot;: 8,
    &quot;priority&quot;: &quot;low&quot;,
    &quot;priority_id&quot;: 2,
    &quot;users&quot;: [
      {
        &quot;id&quot;: 2,
        &quot;first_name&quot;: &quot;herry&quot;,
        &quot;last_name&quot;: &quot;porter&quot;,
        &quot;email&quot;: &quot;admin@gmail.com&quot;,
        &quot;photo&quot;: &quot;http://localhost:8000/storage/photos/no-image.jpg&quot;
      }
    ],
    &quot;start_date&quot;: &quot;2025-06-01&quot;,
    &quot;due_date&quot;: &quot;2025-06-10&quot;,
    &quot;project&quot;: &quot;favorite project&quot;,
    &quot;project_id&quot;: 2,
    &quot;description&quot;: &quot;This is a test task description.&quot;,
    ...
  }
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;You are not authorized to set this status.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Task] 999&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Task status couldn&#039;t updated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-task--id--status--newStatus-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-task--id--status--newStatus-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-task--id--status--newStatus-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-task--id--status--newStatus-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-task--id--status--newStatus-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-task--id--status--newStatus-" data-method="POST"
      data-path="api/master-panel/task/{id}/status/{newStatus}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-task--id--status--newStatus-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-task--id--status--newStatus-"
                    onclick="tryItOut('POSTapi-master-panel-task--id--status--newStatus-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-task--id--status--newStatus-"
                    onclick="cancelTryOut('POSTapi-master-panel-task--id--status--newStatus-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-task--id--status--newStatus-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/task/{id}/status/{newStatus}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-task--id--status--newStatus-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-task--id--status--newStatus-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="POSTapi-master-panel-task--id--status--newStatus-"
               value="25"
               data-component="url">
    <br>
<p>The ID of the task. Example: <code>25</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>newStatus</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="newStatus"                data-endpoint="POSTapi-master-panel-task--id--status--newStatus-"
               value="8"
               data-component="url">
    <br>
<p>The ID of the new status. Example: <code>8</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-master-panel-task--id--status--newStatus-" style="display: none">
            <input type="radio" name="isApi"
                   value="1"
                   data-endpoint="POSTapi-master-panel-task--id--status--newStatus-"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-master-panel-task--id--status--newStatus-" style="display: none">
            <input type="radio" name="isApi"
                   value="0"
                   data-endpoint="POSTapi-master-panel-task--id--status--newStatus-"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Optional. Set to true if calling from API to get a structured API response. Example: <code>true</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-master-panel-task--id--status--newStatus-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>statusId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="statusId"                data-endpoint="POSTapi-master-panel-task--id--status--newStatus-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="task-status-and-performance-POSTapi-master-panel-tasks-save-view-preference">Save User&#039;s Default Task View Preference</h2>

<p>
</p>



<span id="example-requests-POSTapi-master-panel-tasks-save-view-preference">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/tasks/save-view-preference" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"view\": \"board\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/tasks/save-view-preference"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "view": "board"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-tasks-save-view-preference">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Default View Set Successfully.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;view&quot;: [
            &quot;The view field is required.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-tasks-save-view-preference" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-tasks-save-view-preference"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-tasks-save-view-preference"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-tasks-save-view-preference" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-tasks-save-view-preference">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-tasks-save-view-preference" data-method="POST"
      data-path="api/master-panel/tasks/save-view-preference"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-tasks-save-view-preference', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-tasks-save-view-preference"
                    onclick="tryItOut('POSTapi-master-panel-tasks-save-view-preference');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-tasks-save-view-preference"
                    onclick="cancelTryOut('POSTapi-master-panel-tasks-save-view-preference');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-tasks-save-view-preference"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/tasks/save-view-preference</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-tasks-save-view-preference"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-tasks-save-view-preference"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>view</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="view"                data-endpoint="POSTapi-master-panel-tasks-save-view-preference"
               value="board"
               data-component="body">
    <br>
<p>The view preference to set. Example: <code>board</code></p>
        </div>
        </form>

                    <h2 id="task-status-and-performance-POSTapi-master-panel-tasks-update-priority">Update Task Priority</h2>

<p>
</p>



<span id="example-requests-POSTapi-master-panel-tasks-update-priority">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/tasks/update-priority" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"id\": 25,
    \"priorityId\": 1
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/tasks/update-priority"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 25,
    "priorityId": 1
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-tasks-update-priority">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Priority updated successfully.&quot;,
    &quot;id&quot;: 25,
    &quot;type&quot;: &quot;task&quot;,
    &quot;activity_message&quot;: &quot;herry porter updated task priority from low to high&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 25,
        &quot;workspace_id&quot;: 2,
        &quot;title&quot;: &quot;Test Task Title&quot;,
        &quot;status&quot;: &quot;Approved&quot;,
        &quot;status_id&quot;: 8,
        &quot;priority&quot;: &quot;high&quot;,
        &quot;priority_id&quot;: 1,
        &quot;users&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;first_name&quot;: &quot;herry&quot;,
                &quot;last_name&quot;: &quot;porter&quot;,
                &quot;email&quot;: &quot;admin@gmail.com&quot;,
                &quot;photo&quot;: &quot;http://localhost:8000/storage/photos/no-image.jpg&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;first_name&quot;: &quot;John&quot;,
                &quot;last_name&quot;: &quot;Doe&quot;,
                &quot;email&quot;: &quot;admin2@gmail.com&quot;,
                &quot;photo&quot;: &quot;http://localhost:8000/storage/photos/no-image.jpg&quot;
            }
        ],
        &quot;user_id&quot;: [
            2,
            3
        ],
        &quot;clients&quot;: [],
        &quot;start_date&quot;: &quot;2025-06-01&quot;,
        &quot;due_date&quot;: &quot;2025-06-10&quot;,
        &quot;project&quot;: &quot;favorite project&quot;,
        &quot;project_id&quot;: 2,
        &quot;description&quot;: &quot;This is a test task description.&quot;,
        &quot;note&quot;: &quot;Optional note about the task.&quot;,
        &quot;favorite&quot;: 0,
        &quot;client_can_discuss&quot;: null,
        &quot;created_at&quot;: &quot;2025-05-28&quot;,
        &quot;updated_at&quot;: &quot;2025-06-03&quot;,
        &quot;enable_reminder&quot;: 1,
        &quot;last_reminder_sent&quot;: null,
        &quot;frequency_type&quot;: &quot;weekly&quot;,
        &quot;day_of_week&quot;: 3,
        &quot;time_of_day&quot;: &quot;14:30:00&quot;,
        &quot;enable_recurring_task&quot;: 1,
        &quot;recurrence_frequency&quot;: &quot;monthly&quot;,
        &quot;recurrence_day_of_month&quot;: 15,
        &quot;recurrence_starts_from&quot;: &quot;2025-06-01&quot;,
        &quot;recurrence_occurrences&quot;: 6,
        &quot;billing_type&quot;: &quot;billable&quot;,
        &quot;completion_percentage&quot;: 0,
        &quot;task_list_id&quot;: null
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;No priority change detected.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;id&quot;: [
            &quot;The id field is required.&quot;
        ],
        &quot;priorityId&quot;: [
            &quot;The selected priorityId is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Priority couldn&rsquo;t be updated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-tasks-update-priority" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-tasks-update-priority"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-tasks-update-priority"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-tasks-update-priority" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-tasks-update-priority">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-tasks-update-priority" data-method="POST"
      data-path="api/master-panel/tasks/update-priority"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-tasks-update-priority', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-tasks-update-priority"
                    onclick="tryItOut('POSTapi-master-panel-tasks-update-priority');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-tasks-update-priority"
                    onclick="cancelTryOut('POSTapi-master-panel-tasks-update-priority');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-tasks-update-priority"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/tasks/update-priority</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-tasks-update-priority"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-tasks-update-priority"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="POSTapi-master-panel-tasks-update-priority"
               value="25"
               data-component="url">
    <br>
<p>optional The ID of the task. If provided in the URL, it doesn't need to be in the body. Example: <code>25</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="POSTapi-master-panel-tasks-update-priority"
               value="25"
               data-component="body">
    <br>
<p>The ID of the task to update. Required if not provided in the URL. Example: <code>25</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>priorityId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="priorityId"                data-endpoint="POSTapi-master-panel-tasks-update-priority"
               value="1"
               data-component="body">
    <br>
<p>nullable The new priority ID. Use <code>null</code> or <code>0</code> to remove the priority. Example: <code>1</code></p>
        </div>
        </form>

                <h1 id="task-media">Task Media</h1>

    <p>Upload one or more media files to an existing task using its ID. The uploaded files will be stored
in the <code>task-media</code> media collection using Spatie MediaLibrary. This endpoint accepts multiple files.</p>

                                <h2 id="task-media-POSTapi-master-panel-tasks-upload-media">Upload media files to a task.</h2>

<p>
</p>



<span id="example-requests-POSTapi-master-panel-tasks-upload-media">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/tasks/upload-media" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "id=25"\
    --form "media_files[]=@C:\Users\Dikshita\AppData\Local\Temp\phpC1F6.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/tasks/upload-media"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('id', '25');
body.append('media_files[]', document.querySelector('input[name="media_files[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-tasks-upload-media">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;File(s) uploaded successfully.&quot;,
    &quot;id&quot;: [
        15,
        16
    ],
    &quot;type&quot;: &quot;media&quot;,
    &quot;parent_type&quot;: &quot;task&quot;,
    &quot;parent_id&quot;: 25
}</code>
 </pre>
            <blockquote>
            <p>Example response (200, No files uploaded):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;No file(s) chosen.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, Missing or invalid task ID):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;id&quot;: [
            &quot;The selected id is invalid.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-tasks-upload-media" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-tasks-upload-media"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-tasks-upload-media"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-tasks-upload-media" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-tasks-upload-media">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-tasks-upload-media" data-method="POST"
      data-path="api/master-panel/tasks/upload-media"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-tasks-upload-media', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-tasks-upload-media"
                    onclick="tryItOut('POSTapi-master-panel-tasks-upload-media');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-tasks-upload-media"
                    onclick="cancelTryOut('POSTapi-master-panel-tasks-upload-media');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-tasks-upload-media"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/tasks/upload-media</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-tasks-upload-media"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-tasks-upload-media"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="POSTapi-master-panel-tasks-upload-media"
               value="25"
               data-component="body">
    <br>
<p>The ID of the task to which the files should be uploaded. Example: <code>25</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>media_files</code></b>&nbsp;&nbsp;
<small>file[]</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="media_files[0]"                data-endpoint="POSTapi-master-panel-tasks-upload-media"
               data-component="body">
        <input type="file" style="display: none"
               name="media_files[1]"                data-endpoint="POSTapi-master-panel-tasks-upload-media"
               data-component="body">
    <br>
<p>The media files to upload. Must be provided as an array of files.</p>
        </div>
        </form>

                    <h2 id="task-media-GETapi-master-panel-tasks--id--media">Get task media list.</h2>

<p>
</p>



<span id="example-requests-GETapi-master-panel-tasks--id--media">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/tasks/25/media?search=image&amp;sort=file_name&amp;order=asc" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/tasks/25/media"
);

const params = {
    "search": "image",
    "sort": "file_name",
    "order": "asc",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-tasks--id--media">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;rows&quot;: [
        {
            &quot;id&quot;: 16,
            &quot;file&quot;: &quot;&lt;a href=\&quot;http://localhost:8000/storage/task-media/hmgoepprod.jpg\&quot; data-lightbox=\&quot;task-media\&quot;&gt;&lt;img src=\&quot;http://localhost:8000/storage/task-media/hmgoepprod.jpg\&quot; alt=\&quot;hmgoepprod.jpg\&quot; width=\&quot;50\&quot;&gt;&lt;/a&gt;&quot;,
            &quot;file_name&quot;: &quot;hmgoepprod.jpg&quot;,
            &quot;file_size&quot;: &quot;67.54 KB&quot;,
            &quot;created_at&quot;: &quot;2025-06-04&quot;,
            &quot;updated_at&quot;: &quot;2025-06-04&quot;,
            &quot;actions&quot;: &quot;&lt;a href=\&quot;http://localhost:8000/storage/task-media/hmgoepprod.jpg\&quot; title=\&quot;Download\&quot; download&gt;&lt;i class=\&quot;bx bx-download bx-sm\&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;button title=\&quot;Delete\&quot; type=\&quot;button\&quot; class=\&quot;btn delete\&quot; data-id=\&quot;16\&quot; data-type=\&quot;task-media\&quot; data-table=\&quot;task_media_table\&quot;&gt;&lt;i class=\&quot;bx bx-trash text-danger\&quot;&gt;&lt;/i&gt;&lt;/button&gt;&quot;
        }
    ],
    &quot;total&quot;: 2
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-tasks--id--media" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-tasks--id--media"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-tasks--id--media"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-tasks--id--media" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-tasks--id--media">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-tasks--id--media" data-method="GET"
      data-path="api/master-panel/tasks/{id}/media"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-tasks--id--media', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-tasks--id--media"
                    onclick="tryItOut('GETapi-master-panel-tasks--id--media');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-tasks--id--media"
                    onclick="cancelTryOut('GETapi-master-panel-tasks--id--media');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-tasks--id--media"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/tasks/{id}/media</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-tasks--id--media"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-tasks--id--media"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-master-panel-tasks--id--media"
               value="25"
               data-component="url">
    <br>
<p>The ID of the task to get media for. Example: <code>25</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>search</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="search"                data-endpoint="GETapi-master-panel-tasks--id--media"
               value="image"
               data-component="query">
    <br>
<p>Optional search term to filter by file name, ID, or creation date. Example: <code>image</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sort</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sort"                data-endpoint="GETapi-master-panel-tasks--id--media"
               value="file_name"
               data-component="query">
    <br>
<p>Field to sort by. Default is <code>id</code>. Example: <code>file_name</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="order"                data-endpoint="GETapi-master-panel-tasks--id--media"
               value="asc"
               data-component="query">
    <br>
<p>Sorting direction: <code>asc</code> or <code>desc</code>. Default is <code>desc</code>. Example: <code>asc</code></p>
            </div>
                </form>

                    <h2 id="task-media-DELETEapi-master-panel-tasks-media--id-">Delete a media file from a task.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-master-panel-tasks-media--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/tasks/media/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/tasks/media/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-tasks-media--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;File deleted successfully.&quot;,
    &quot;id&quot;: 45,
    &quot;title&quot;: &quot;example-file.pdf&quot;,
    &quot;parent_id&quot;: 23,
    &quot;type&quot;: &quot;media&quot;,
    &quot;parent_type&quot;: &quot;task&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;File not found.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-tasks-media--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-tasks-media--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-tasks-media--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-tasks-media--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-tasks-media--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-tasks-media--id-" data-method="DELETE"
      data-path="api/master-panel/tasks/media/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-tasks-media--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-tasks-media--id-"
                    onclick="tryItOut('DELETEapi-master-panel-tasks-media--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-tasks-media--id-"
                    onclick="cancelTryOut('DELETEapi-master-panel-tasks-media--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-tasks-media--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/tasks/media/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-tasks-media--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-tasks-media--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-master-panel-tasks-media--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the medium. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>mediaId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="mediaId"                data-endpoint="DELETEapi-master-panel-tasks-media--id-"
               value="45"
               data-component="url">
    <br>
<p>The ID of the media file to delete. Example: <code>45</code></p>
            </div>
                    </form>

                <h1 id="task-celender">Task Celender</h1>

    <p>This endpoint allows an authenticated user to add a comment to a specific model
such as a Task, Project, or any commentable entity. It also supports mentions
(e.g., @username) and file attachments (e.g., PNG, PDF).</p>

                                <h2 id="task-celender-GETapi-master-panel-calendar--workspaceId-">Get calendar tasks data for a workspace.</h2>

<p>
</p>

<p>Retrieves tasks for the specified workspace filtered by an optional date range and project ID.
The tasks are formatted for use with FullCalendar.</p>

<span id="example-requests-GETapi-master-panel-calendar--workspaceId-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/calendar/17?start=consequatur&amp;end=consequatur&amp;project_id=17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/calendar/17"
);

const params = {
    "start": "consequatur",
    "end": "consequatur",
    "project_id": "17",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-calendar--workspaceId-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 25,
        &quot;tasks_info_url&quot;: &quot;http://localhost:8000/master-panel/tasks/information/25&quot;,
        &quot;title&quot;: &quot;Test Task Title&quot;,
        &quot;start&quot;: &quot;2025-06-01&quot;,
        &quot;end&quot;: &quot;2025-06-10&quot;,
        &quot;backgroundColor&quot;: &quot;#a0e4a3&quot;,
        &quot;borderColor&quot;: &quot;#ffffff&quot;,
        &quot;textColor&quot;: &quot;#000000&quot;
    },
    {
        &quot;id&quot;: 28,
        &quot;tasks_info_url&quot;: &quot;http://localhost:8000/master-panel/tasks/information/28&quot;,
        &quot;title&quot;: &quot;Create new onboarding flow&quot;,
        &quot;start&quot;: &quot;2015-01-01&quot;,
        &quot;end&quot;: &quot;2025-06-06&quot;,
        &quot;backgroundColor&quot;: &quot;#a0e4a3&quot;,
        &quot;borderColor&quot;: &quot;#ffffff&quot;,
        &quot;textColor&quot;: &quot;#000000&quot;
    }
]</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Workspace not found.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Something went wrong: &lt;error_message&gt;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-calendar--workspaceId-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-calendar--workspaceId-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-calendar--workspaceId-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-calendar--workspaceId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-calendar--workspaceId-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-calendar--workspaceId-" data-method="GET"
      data-path="api/master-panel/calendar/{workspaceId}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-calendar--workspaceId-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-calendar--workspaceId-"
                    onclick="tryItOut('GETapi-master-panel-calendar--workspaceId-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-calendar--workspaceId-"
                    onclick="cancelTryOut('GETapi-master-panel-calendar--workspaceId-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-calendar--workspaceId-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/calendar/{workspaceId}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-calendar--workspaceId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-calendar--workspaceId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspaceId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="workspaceId"                data-endpoint="GETapi-master-panel-calendar--workspaceId-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the workspace to fetch tasks from. Example: <code>17</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>start</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="start"                data-endpoint="GETapi-master-panel-calendar--workspaceId-"
               value="consequatur"
               data-component="query">
    <br>
<p>optional Start date for filtering tasks (format: YYYY-MM-DD). Example: <code>consequatur</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>end</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="end"                data-endpoint="GETapi-master-panel-calendar--workspaceId-"
               value="consequatur"
               data-component="query">
    <br>
<p>optional End date for filtering tasks (format: YYYY-MM-DD). Example: <code>consequatur</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>project_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="project_id"                data-endpoint="GETapi-master-panel-calendar--workspaceId-"
               value="17"
               data-component="query">
    <br>
<p>optional Project ID to filter tasks by project. Example: <code>17</code></p>
            </div>
                </form>

                    <h2 id="task-celender-POSTapi-master-panel-comments-create">Add a comment to a model (e.g., task, project).</h2>

<p>
</p>



<span id="example-requests-POSTapi-master-panel-comments-create">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/comments-create" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "model_type=App\Models\Task"\
    --form "model_id=25"\
    --form "content=This is a test comment mentioning @john_doe"\
    --form "parent_id=5"\
    --form "attachments[]=@C:\Users\Dikshita\AppData\Local\Temp\phpC2D1.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/comments-create"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('model_type', 'App\Models\Task');
body.append('model_id', '25');
body.append('content', 'This is a test comment mentioning @john_doe');
body.append('parent_id', '5');
body.append('attachments[]', document.querySelector('input[name="attachments[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-comments-create">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Comment Added Successfully&quot;,
    &quot;comment&quot;: {
        &quot;id&quot;: 20,
        &quot;content&quot;: &quot;This is a test comment mentioning @john_doe&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: null,
            &quot;name&quot;: null,
            &quot;email&quot;: null
        },
        &quot;attachments&quot;: [],
        &quot;parent_id&quot;: null,
        &quot;created_at&quot;: &quot;2025-06-04 06:05:24&quot;,
        &quot;created_human&quot;: &quot;1 second ago&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;model_type&quot;: [
            &quot;The model_type field is required.&quot;
        ],
        &quot;model_id&quot;: [
            &quot;The model_id field is required.&quot;
        ],
        &quot;content&quot;: [
            &quot;The content field is required.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-comments-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-comments-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-comments-create"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-comments-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-comments-create">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-comments-create" data-method="POST"
      data-path="api/master-panel/comments-create"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-comments-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-comments-create"
                    onclick="tryItOut('POSTapi-master-panel-comments-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-comments-create"
                    onclick="cancelTryOut('POSTapi-master-panel-comments-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-comments-create"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/comments-create</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-comments-create"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-comments-create"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>model_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="model_type"                data-endpoint="POSTapi-master-panel-comments-create"
               value="App\Models\Task"
               data-component="body">
    <br>
<p>The fully qualified model class name. Example: <code>App\Models\Task</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>model_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="model_id"                data-endpoint="POSTapi-master-panel-comments-create"
               value="25"
               data-component="body">
    <br>
<p>The ID of the model to comment on. Example: <code>25</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="POSTapi-master-panel-comments-create"
               value="This is a test comment mentioning @john_doe"
               data-component="body">
    <br>
<p>The comment content. Mentions like @username will be parsed. Example: <code>This is a test comment mentioning @john_doe</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>parent_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="parent_id"                data-endpoint="POSTapi-master-panel-comments-create"
               value="5"
               data-component="body">
    <br>
<p>nullable The ID of the parent comment (for replies). Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>attachments</code></b>&nbsp;&nbsp;
<small>file[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="attachments[0]"                data-endpoint="POSTapi-master-panel-comments-create"
               data-component="body">
        <input type="file" style="display: none"
               name="attachments[1]"                data-endpoint="POSTapi-master-panel-comments-create"
               data-component="body">
    <br>
<p>Must be a file. Must not be greater than 2048 kilobytes.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>attachments[]</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="attachments.0"                data-endpoint="POSTapi-master-panel-comments-create"
               value=""
               data-component="body">
    <br>
<p>optional Optional file attachments (JPG, PNG, PDF, etc).</p>
        </div>
        </form>

                <h1 id="task-comments">Task Comments</h1>

    <p>This endpoint updates the content of an existing comment. It also detects user mentions
(e.g., @username) in the updated content and sends mention notifications accordingly.</p>

                                <h2 id="task-comments-GETapi-master-panel-comments--id-">get comments</h2>

<p>
</p>

<p>This endpoint allows an authenticated user to add a comment to any commentable model (e.g., Task, Project).
Supports file attachments and user mentions within the comment content.</p>

<span id="example-requests-GETapi-master-panel-comments--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/comments/consequatur" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "model_type=App\Models\Task"\
    --form "model_id=12"\
    --form "content=This is a test comment with @johndoe mentioned."\
    --form "parent_id=5"\
    --form "attachments[]=@C:\Users\Dikshita\AppData\Local\Temp\phpBFD2.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/comments/consequatur"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('model_type', 'App\Models\Task');
body.append('model_id', '12');
body.append('content', 'This is a test comment with @johndoe mentioned.');
body.append('parent_id', '5');
body.append('attachments[]', document.querySelector('input[name="attachments[]"]').files[0]);

fetch(url, {
    method: "GET",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-comments--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;success&quot;: true,
  &quot;comment&quot;: {
    &quot;id&quot;: 20,
    &quot;commentable_type&quot;: &quot;App\\Models\\Task&quot;,
    &quot;commentable_id&quot;: 12,
    &quot;content&quot;: &quot;This is a test comment with &lt;a href=&#039;/user/profile/5&#039;&gt;@johndoe&lt;/a&gt;&quot;,
    &quot;user_id&quot;: 3,
    &quot;parent_id&quot;: null,
    &quot;created_at&quot;: &quot;2025-05-28T12:45:00.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2025-05-28T12:45:00.000000Z&quot;,
    &quot;attachments&quot;: [
      {
        &quot;id&quot;: 1,
        &quot;comment_id&quot;: 20,
        &quot;file_name&quot;: &quot;screenshot.png&quot;,
        &quot;file_path&quot;: &quot;comment_attachments/screenshot.png&quot;,
        &quot;file_type&quot;: &quot;image/png&quot;
      }
    ]
  },
  &quot;message&quot;: &quot;Comment Added Successfully&quot;,
  &quot;user&quot;: {
    &quot;id&quot;: 3,
    &quot;name&quot;: &quot;John Doe&quot;,
    ...
  },
  &quot;created_at&quot;: &quot;just now&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;content&quot;: [
            &quot;The content field is required.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-comments--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-comments--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-comments--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-comments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-comments--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-comments--id-" data-method="GET"
      data-path="api/master-panel/comments/{id}"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-comments--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-comments--id-"
                    onclick="tryItOut('GETapi-master-panel-comments--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-comments--id-"
                    onclick="cancelTryOut('GETapi-master-panel-comments--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-comments--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/comments/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-comments--id-"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-comments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-master-panel-comments--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the comment. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>model_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="model_type"                data-endpoint="GETapi-master-panel-comments--id-"
               value="App\Models\Task"
               data-component="body">
    <br>
<p>The fully qualified class name of the model being commented on (e.g., App\Models\Task). Example: <code>App\Models\Task</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>model_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="model_id"                data-endpoint="GETapi-master-panel-comments--id-"
               value="12"
               data-component="body">
    <br>
<p>The ID of the model instance being commented on. Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="GETapi-master-panel-comments--id-"
               value="This is a test comment with @johndoe mentioned."
               data-component="body">
    <br>
<p>The content of the comment. Mentions (e.g., @username) will be converted to user links. Example: <code>This is a test comment with @johndoe mentioned.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>parent_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="parent_id"                data-endpoint="GETapi-master-panel-comments--id-"
               value="5"
               data-component="body">
    <br>
<p>nullable The ID of the parent comment if this is a reply. Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>attachments</code></b>&nbsp;&nbsp;
<small>file[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="attachments[0]"                data-endpoint="GETapi-master-panel-comments--id-"
               data-component="body">
        <input type="file" style="display: none"
               name="attachments[1]"                data-endpoint="GETapi-master-panel-comments--id-"
               data-component="body">
    <br>
<p>Optional array of files to attach to the comment (jpg, jpeg, png, pdf, xlsx, txt, docx, max 2MB each).</p>
        </div>
        </form>

                    <h2 id="task-comments-PUTapi-master-panel-comments--id-">Update a comment&#039;s content.</h2>

<p>
</p>



<span id="example-requests-PUTapi-master-panel-comments--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/master-panel/comments/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"comment_id\": 15,
    \"content\": \"Updated comment mentioning @janedoe.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/comments/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "comment_id": 15,
    "content": "Updated comment mentioning @janedoe."
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-master-panel-comments--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Comment updated successfully.&quot;,
    &quot;id&quot;: 15,
    &quot;type&quot;: &quot;project&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Comment couldn&#039;t updated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-master-panel-comments--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-master-panel-comments--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-master-panel-comments--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-master-panel-comments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-master-panel-comments--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-master-panel-comments--id-" data-method="PUT"
      data-path="api/master-panel/comments/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-master-panel-comments--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-master-panel-comments--id-"
                    onclick="tryItOut('PUTapi-master-panel-comments--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-master-panel-comments--id-"
                    onclick="cancelTryOut('PUTapi-master-panel-comments--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-master-panel-comments--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/master-panel/comments/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-master-panel-comments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-master-panel-comments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-master-panel-comments--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the comment. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>comment_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="comment_id"                data-endpoint="PUTapi-master-panel-comments--id-"
               value="15"
               data-component="body">
    <br>
<p>The ID of the comment to update. Example: <code>15</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="PUTapi-master-panel-comments--id-"
               value="Updated comment mentioning @janedoe."
               data-component="body">
    <br>
<p>The updated content of the comment. User mentions using @username will be parsed and linked. Example: <code>Updated comment mentioning @janedoe.</code></p>
        </div>
        </form>

                    <h2 id="task-comments-DELETEapi-master-panel-comments--id-">Permanently delete a comment and its attachments.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-master-panel-comments--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/comments/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"comment_id\": 12
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/comments/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "comment_id": 12
};

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-comments--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Comment deleted successfully.&quot;,
    &quot;id&quot;: 12,
    &quot;type&quot;: &quot;project&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Comment couldn&#039;t deleted.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-comments--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-comments--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-comments--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-comments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-comments--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-comments--id-" data-method="DELETE"
      data-path="api/master-panel/comments/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-comments--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-comments--id-"
                    onclick="tryItOut('DELETEapi-master-panel-comments--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-comments--id-"
                    onclick="cancelTryOut('DELETEapi-master-panel-comments--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-comments--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/comments/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-comments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-comments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-master-panel-comments--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the comment. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>comment_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="comment_id"                data-endpoint="DELETEapi-master-panel-comments--id-"
               value="12"
               data-component="body">
    <br>
<p>The ID of the comment to delete. Example: <code>12</code></p>
        </div>
        </form>

                <h1 id="status-management">Status Management</h1>

    

                                <h2 id="status-management-GETapi-master-panel-status--id--">Get Status List or a Single Status</h2>

<p>
</p>

<p>This endpoint allows you to:</p>
<ul>
<li>Retrieve a list of all status records.</li>
<li>Retrieve a specific status record by providing its ID.</li>
</ul>

<span id="example-requests-GETapi-master-panel-status--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/status/3" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/status/3"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-status--id--">
            <blockquote>
            <p>Example response (200, Fetch all statuses):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;rows&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;title&quot;: &quot;Pending&quot;,
            &quot;roles_has_access&quot;: &quot;Admin, Manager&quot;,
            &quot;color&quot;: &quot;&lt;span class=\&quot;badge bg-warning\&quot;&gt;Pending&lt;/span&gt;&quot;,
            &quot;created_at&quot;: &quot;2024-08-20 10:12 AM&quot;,
            &quot;updated_at&quot;: &quot;2024-08-25 03:45 PM&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;title&quot;: &quot;Approved&quot;,
            &quot;roles_has_access&quot;: &quot;Admin&quot;,
            &quot;color&quot;: &quot;&lt;span class=\&quot;badge bg-success\&quot;&gt;Approved&lt;/span&gt;&quot;,
            &quot;created_at&quot;: &quot;2024-08-21 11:30 AM&quot;,
            &quot;updated_at&quot;: &quot;2024-08-26 02:15 PM&quot;
        }
    ],
    &quot;total&quot;: 2
}</code>
 </pre>
            <blockquote>
            <p>Example response (200, Fetch single status by ID):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 3,
    &quot;title&quot;: &quot;Rejected&quot;,
    &quot;roles_has_access&quot;: &quot;User&quot;,
    &quot;color&quot;: &quot;&lt;span class=\&quot;badge bg-danger\&quot;&gt;Rejected&lt;/span&gt;&quot;,
    &quot;created_at&quot;: &quot;2024-08-22 09:00 AM&quot;,
    &quot;updated_at&quot;: &quot;2024-08-28 01:00 PM&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401, Unauthenticated request):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Status not found for given ID):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Status not found.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500, Unexpected server error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Internal Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-status--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-status--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-status--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-status--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-status--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-status--id--" data-method="GET"
      data-path="api/master-panel/status/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-status--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-status--id--"
                    onclick="tryItOut('GETapi-master-panel-status--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-status--id--"
                    onclick="cancelTryOut('GETapi-master-panel-status--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-status--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/status/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-status--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-status--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-master-panel-status--id--"
               value="3"
               data-component="url">
    <br>
<p>Optional. The ID of the status you want to retrieve. Example: <code>3</code></p>
            </div>
                    </form>

                    <h2 id="status-management-POSTapi-master-panel-statuses">Create a New Status</h2>

<p>
</p>

<p>This endpoint creates a new status entry with a unique slug and assigns roles that have access to it.</p>

<span id="example-requests-POSTapi-master-panel-statuses">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/statuses" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"Approved\",
    \"color\": \"success\",
    \"role_ids\": [
        1,
        2
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/statuses"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "Approved",
    "color": "success",
    "role_ids": [
        1,
        2
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-statuses">
            <blockquote>
            <p>Example response (200, Successful creation):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Status created successfully.&quot;,
    &quot;id&quot;: 5,
    &quot;status&quot;: {
        &quot;id&quot;: 5,
        &quot;title&quot;: &quot;Approved&quot;,
        &quot;color&quot;: &quot;success&quot;,
        &quot;slug&quot;: &quot;approved&quot;,
        &quot;admin_id&quot;: 1,
        &quot;created_at&quot;: &quot;2025-05-28T12:34:56.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-28T12:34:56.000000Z&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, Validation failed):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;title&quot;: [
            &quot;The title field is required.&quot;
        ],
        &quot;color&quot;: [
            &quot;The color field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500, Creation failed due to internal error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Status couldn&#039;t created.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-statuses" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-statuses"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-statuses"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-statuses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-statuses">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-statuses" data-method="POST"
      data-path="api/master-panel/statuses"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-statuses', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-statuses"
                    onclick="tryItOut('POSTapi-master-panel-statuses');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-statuses"
                    onclick="cancelTryOut('POSTapi-master-panel-statuses');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-statuses"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/statuses</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-statuses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-statuses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-master-panel-statuses"
               value="Approved"
               data-component="body">
    <br>
<p>The name of the status. Example: <code>Approved</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color"                data-endpoint="POSTapi-master-panel-statuses"
               value="success"
               data-component="body">
    <br>
<p>The Bootstrap color class (without <code>bg-</code> prefix). Example: <code>success</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="role_ids[0]"                data-endpoint="POSTapi-master-panel-statuses"
               data-component="body">
        <input type="text" style="display: none"
               name="role_ids[1]"                data-endpoint="POSTapi-master-panel-statuses"
               data-component="body">
    <br>
<p>Optional list of role IDs to associate with the status.</p>
        </div>
        </form>

                    <h2 id="status-management-PUTapi-master-panel-statuses--id-">Update an Existing Status</h2>

<p>
</p>

<p>This endpoint updates the title, color, and associated roles of an existing status.</p>

<span id="example-requests-PUTapi-master-panel-statuses--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/master-panel/statuses/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"id\": 5,
    \"title\": \"Rejected\",
    \"color\": \"danger\",
    \"role_ids\": [
        1,
        3
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/statuses/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 5,
    "title": "Rejected",
    "color": "danger",
    "role_ids": [
        1,
        3
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-master-panel-statuses--id-">
            <blockquote>
            <p>Example response (200, Successful update):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Status updated successfully.&quot;,
    &quot;id&quot;: 5
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Status not found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Status] 99&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, Validation failed):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;id&quot;: [
            &quot;The id field is required.&quot;
        ],
        &quot;title&quot;: [
            &quot;The title field is required.&quot;
        ],
        &quot;color&quot;: [
            &quot;The color field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500, Update failed due to internal error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Status couldn&#039;t updated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-master-panel-statuses--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-master-panel-statuses--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-master-panel-statuses--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-master-panel-statuses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-master-panel-statuses--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-master-panel-statuses--id-" data-method="PUT"
      data-path="api/master-panel/statuses/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-master-panel-statuses--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-master-panel-statuses--id-"
                    onclick="tryItOut('PUTapi-master-panel-statuses--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-master-panel-statuses--id-"
                    onclick="cancelTryOut('PUTapi-master-panel-statuses--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-master-panel-statuses--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/master-panel/statuses/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-master-panel-statuses--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-master-panel-statuses--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-master-panel-statuses--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the status. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-master-panel-statuses--id-"
               value="5"
               data-component="body">
    <br>
<p>The ID of the status to update. Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-master-panel-statuses--id-"
               value="Rejected"
               data-component="body">
    <br>
<p>The updated title of the status. Example: <code>Rejected</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color"                data-endpoint="PUTapi-master-panel-statuses--id-"
               value="danger"
               data-component="body">
    <br>
<p>The updated color class (without <code>bg-</code> prefix). Example: <code>danger</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="role_ids[0]"                data-endpoint="PUTapi-master-panel-statuses--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="role_ids[1]"                data-endpoint="PUTapi-master-panel-statuses--id-"
               data-component="body">
    <br>
<p>Optional array of role IDs to sync with the status.</p>
        </div>
        </form>

                    <h2 id="status-management-DELETEapi-master-panel-statuses--id-">Delete a Status</h2>

<p>
</p>

<p>This endpoint deletes a status if it is not associated with any project or task.</p>

<span id="example-requests-DELETEapi-master-panel-statuses--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/statuses/5" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/statuses/5"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-statuses--id-">
            <blockquote>
            <p>Example response (200, Successful deletion):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Status deleted successfully.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, Status associated with project or task):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Status can&#039;t be deleted.It is associated with a project or task.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Status not found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Status] 99&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500, Deletion failed due to server error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Something went wrong while deleting the status.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-statuses--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-statuses--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-statuses--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-statuses--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-statuses--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-statuses--id-" data-method="DELETE"
      data-path="api/master-panel/statuses/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-statuses--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-statuses--id-"
                    onclick="tryItOut('DELETEapi-master-panel-statuses--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-statuses--id-"
                    onclick="cancelTryOut('DELETEapi-master-panel-statuses--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-statuses--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/statuses/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-statuses--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-statuses--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-master-panel-statuses--id-"
               value="5"
               data-component="url">
    <br>
<p>The ID of the status to delete. Example: <code>5</code></p>
            </div>
                    </form>

                    <h2 id="status-management-DELETEapi-master-panel-destroy-multiple-statuses">Delete Multiple Statuses</h2>

<p>
</p>

<p>Deletes multiple statuses by their IDs if they are not associated with any project or task.</p>

<span id="example-requests-DELETEapi-master-panel-destroy-multiple-statuses">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/destroy-multiple-statuses" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"ids\": [
        1,
        2,
        3
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/destroy-multiple-statuses"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "ids": [
        1,
        2,
        3
    ]
};

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-destroy-multiple-statuses">
            <blockquote>
            <p>Example response (200, Successful deletion):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Status(es) deleted successfully.&quot;,
    &quot;id&quot;: [
        1,
        2
    ],
    &quot;titles&quot;: [
        &quot;Approved&quot;,
        &quot;Pending&quot;
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (403, Status associated with project or task):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Status can&#039;t be deleted.It is associated with a project&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Status not found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Status] 99&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, Validation failed):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;ids&quot;: [
            &quot;The ids field is required.&quot;
        ],
        &quot;ids.0&quot;: [
            &quot;The selected ids.0 is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500, Deletion failed due to server error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Something went wrong while deleting the statuses.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-destroy-multiple-statuses" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-destroy-multiple-statuses"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-destroy-multiple-statuses"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-destroy-multiple-statuses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-destroy-multiple-statuses">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-destroy-multiple-statuses" data-method="DELETE"
      data-path="api/master-panel/destroy-multiple-statuses"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-destroy-multiple-statuses', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-destroy-multiple-statuses"
                    onclick="tryItOut('DELETEapi-master-panel-destroy-multiple-statuses');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-destroy-multiple-statuses"
                    onclick="cancelTryOut('DELETEapi-master-panel-destroy-multiple-statuses');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-destroy-multiple-statuses"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/destroy-multiple-statuses</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-destroy-multiple-statuses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-destroy-multiple-statuses"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
 &nbsp;
<br>
<p>Array of status IDs to delete. Each ID must exist in the statuses table.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>*</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ids.*"                data-endpoint="DELETEapi-master-panel-destroy-multiple-statuses"
               value="1"
               data-component="body">
    <br>
<p>Individual status ID. Example: <code>1</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                <h1 id="client-management">Client Management</h1>

    <p>This endpoint deletes a specific client by their ID.
It removes the client from the database along with all their associated todos,
and uses a reusable deletion service for standardized deletion handling.</p>

                                <h2 id="client-management-GETapi-master-panel-clients--id--">List or Retrieve Clients

This endpoint is used to retrieve a list of all clients for the current workspace,
or a single client if an ID is provided. It supports searching, sorting, and pagination.

Requires a `workspace_id` header to identify the current workspace context.</h2>

<p>
</p>



<span id="example-requests-GETapi-master-panel-clients--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/clients/17?isApi=1&amp;search=john&amp;sort=first_name&amp;order=ASC&amp;limit=15" \
    --header "workspace_id: required The workspace ID to filter clients by." \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/clients/17"
);

const params = {
    "isApi": "1",
    "search": "john",
    "sort": "first_name",
    "order": "ASC",
    "limit": "15",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "workspace_id": "required The workspace ID to filter clients by.",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-clients--id--">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;success&quot;: false,
  &quot;message&quot;: &quot;Clients retrieved successfully&quot;,
  &quot;data&quot;: {
    &quot;total&quot;: 2,
    &quot;data&quot;: [
      {
        &quot;id&quot;: 1,
        &quot;first_name&quot;: &quot;John&quot;,
        &quot;last_name&quot;: &quot;Doe&quot;,
        &quot;email&quot;: &quot;john@example.com&quot;,
        &quot;company&quot;: &quot;Acme Inc&quot;,
        ...
      }
    ],
    &quot;pagination&quot;: {
      &quot;current_page&quot;: 1,
      &quot;last_page&quot;: 1,
      &quot;per_page&quot;: 10,
      &quot;total&quot;: 2
    }
  }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;Workspace ID header missing&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;Client not found&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Client couldn&#039;t be retrieved.&quot;,
    &quot;data&quot;: {
        &quot;error&quot;: &quot;Detailed error message&quot;,
        &quot;line&quot;: 123,
        &quot;file&quot;: &quot;path/to/file.php&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-clients--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-clients--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-clients--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-clients--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-clients--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-clients--id--" data-method="GET"
      data-path="api/master-panel/clients/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-clients--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-clients--id--"
                    onclick="tryItOut('GETapi-master-panel-clients--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-clients--id--"
                    onclick="cancelTryOut('GETapi-master-panel-clients--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-clients--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/clients/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="GETapi-master-panel-clients--id--"
               value="required The workspace ID to filter clients by."
               data-component="header">
    <br>
<p>Example: <code>required The workspace ID to filter clients by.</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-clients--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-clients--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-master-panel-clients--id--"
               value="17"
               data-component="url">
    <br>
<p>Optional. The ID of the client to retrieve. If not provided, a paginated list of clients will be returned. Example: <code>17</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="GETapi-master-panel-clients--id--" style="display: none">
            <input type="radio" name="isApi"
                   value="1"
                   data-endpoint="GETapi-master-panel-clients--id--"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-master-panel-clients--id--" style="display: none">
            <input type="radio" name="isApi"
                   value="0"
                   data-endpoint="GETapi-master-panel-clients--id--"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Optional. Indicates if the request is from an API context. Default: false. Example: <code>true</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>search</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="search"                data-endpoint="GETapi-master-panel-clients--id--"
               value="john"
               data-component="query">
    <br>
<p>Optional. Search clients by first name, last name, company, email, or phone. Example: <code>john</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sort</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sort"                data-endpoint="GETapi-master-panel-clients--id--"
               value="first_name"
               data-component="query">
    <br>
<p>Optional. Field to sort by. Default: id. Example: <code>first_name</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="order"                data-endpoint="GETapi-master-panel-clients--id--"
               value="ASC"
               data-component="query">
    <br>
<p>Optional. Sort direction: ASC or DESC. Default: DESC. Example: <code>ASC</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>limit</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="limit"                data-endpoint="GETapi-master-panel-clients--id--"
               value="15"
               data-component="query">
    <br>
<p>Optional. Number of clients per page. Default: 10. Example: <code>15</code></p>
            </div>
                </form>

                    <h2 id="client-management-POSTapi-master-panel-clients">Create a new client.</h2>

<p>
</p>

<p>This endpoint is used to create a new client, either for internal purposes or for general usage.
The client can be created with optional email verification and notification settings.
The request must include a <code>workspace-id</code> in the headers to identify which workspace the client belongs to.</p>

<span id="example-requests-POSTapi-master-panel-clients">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/clients" \
    --header "workspace-id: required The ID of the workspace in which to create the client. Example: 5" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"first_name\": \"John\",
    \"last_name\": \"Doe\",
    \"company\": \"Acme Corp\",
    \"email\": \"john@example.com\",
    \"phone\": \"1234567890\",
    \"country_code\": \"+1\",
    \"password\": \"password123\",
    \"password_confirmation\": \"password123\",
    \"address\": \"123 Main St\",
    \"city\": \"New York\",
    \"state\": \"NY\",
    \"country\": \"USA\",
    \"zip\": \"10001\",
    \"dob\": \"1990-01-01\",
    \"doj\": \"2023-01-01\",
    \"country_iso_code\": \"US\",
    \"internal_purpose\": true,
    \"require_ev\": false,
    \"status\": true,
    \"example\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/clients"
);

const headers = {
    "workspace-id": "required The ID of the workspace in which to create the client. Example: 5",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "John",
    "last_name": "Doe",
    "company": "Acme Corp",
    "email": "john@example.com",
    "phone": "1234567890",
    "country_code": "+1",
    "password": "password123",
    "password_confirmation": "password123",
    "address": "123 Main St",
    "city": "New York",
    "state": "NY",
    "country": "USA",
    "zip": "10001",
    "dob": "1990-01-01",
    "doj": "2023-01-01",
    "country_iso_code": "US",
    "internal_purpose": true,
    "require_ev": false,
    "status": true,
    "example": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-clients">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;error&quot;: false,
  &quot;message&quot;: &quot;Client created successfully.&quot;,
  &quot;data&quot;: {
    &quot;id&quot;: 23,
    &quot;first_name&quot;: &quot;John&quot;,
    &quot;last_name&quot;: &quot;Doe&quot;,
    ...
  }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Invalid or missing workspace.&quot;,
    &quot;workspace_id&quot;: null
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;The email has already been taken in users or clients.&quot;,
    &quot;errors&quot;: {
        &quot;email&quot;: [
            &quot;The email has already been taken in users or clients.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;Exception message here&quot;,
    &quot;message&quot;: &quot;Client could not be created.&quot;,
    &quot;line&quot;: 120,
    &quot;file&quot;: &quot;ClientController.php&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-clients" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-clients"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-clients"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-clients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-clients">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-clients" data-method="POST"
      data-path="api/master-panel/clients"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-clients', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-clients"
                    onclick="tryItOut('POSTapi-master-panel-clients');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-clients"
                    onclick="cancelTryOut('POSTapi-master-panel-clients');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-clients"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/clients</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace-id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace-id"                data-endpoint="POSTapi-master-panel-clients"
               value="required The ID of the workspace in which to create the client. Example: 5"
               data-component="header">
    <br>
<p>Example: <code>required The ID of the workspace in which to create the client. Example: 5</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-clients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-clients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="first_name"                data-endpoint="POSTapi-master-panel-clients"
               value="John"
               data-component="body">
    <br>
<p>The first name of the client. Example: <code>John</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="POSTapi-master-panel-clients"
               value="Doe"
               data-component="body">
    <br>
<p>The last name of the client. Example: <code>Doe</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>company</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="company"                data-endpoint="POSTapi-master-panel-clients"
               value="Acme Corp"
               data-component="body">
    <br>
<p>The company name of the client. Example: <code>Acme Corp</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-master-panel-clients"
               value="john@example.com"
               data-component="body">
    <br>
<p>The email address of the client. Must be unique. Example: <code>john@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-master-panel-clients"
               value="1234567890"
               data-component="body">
    <br>
<p>The phone number of the client. Example: <code>1234567890</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="country_code"                data-endpoint="POSTapi-master-panel-clients"
               value="+1"
               data-component="body">
    <br>
<p>The phone country code. Example: <code>+1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-master-panel-clients"
               value="password123"
               data-component="body">
    <br>
<p>required_if:internal_purpose,off The password for the client (min 6 characters). Required unless internal_purpose is on. Example: <code>password123</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-master-panel-clients"
               value="password123"
               data-component="body">
    <br>
<p>Same as password. Required if password is present. Example: <code>password123</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="POSTapi-master-panel-clients"
               value="123 Main St"
               data-component="body">
    <br>
<p>The address of the client. Example: <code>123 Main St</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="POSTapi-master-panel-clients"
               value="New York"
               data-component="body">
    <br>
<p>The city of the client. Example: <code>New York</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>state</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="state"                data-endpoint="POSTapi-master-panel-clients"
               value="NY"
               data-component="body">
    <br>
<p>The state of the client. Example: <code>NY</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="country"                data-endpoint="POSTapi-master-panel-clients"
               value="USA"
               data-component="body">
    <br>
<p>The country of the client. Example: <code>USA</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>zip</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="zip"                data-endpoint="POSTapi-master-panel-clients"
               value="10001"
               data-component="body">
    <br>
<p>The ZIP/postal code. Example: <code>10001</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>dob</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="dob"                data-endpoint="POSTapi-master-panel-clients"
               value="1990-01-01"
               data-component="body">
    <br>
<p>The date of birth in the configured date format. Example: <code>1990-01-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>doj</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="doj"                data-endpoint="POSTapi-master-panel-clients"
               value="2023-01-01"
               data-component="body">
    <br>
<p>The date of joining in the configured date format. Example: <code>2023-01-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_iso_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="country_iso_code"                data-endpoint="POSTapi-master-panel-clients"
               value="US"
               data-component="body">
    <br>
<p>ISO country code. Example: <code>US</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>internal_purpose</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-master-panel-clients" style="display: none">
            <input type="radio" name="internal_purpose"
                   value="true"
                   data-endpoint="POSTapi-master-panel-clients"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-master-panel-clients" style="display: none">
            <input type="radio" name="internal_purpose"
                   value="false"
                   data-endpoint="POSTapi-master-panel-clients"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Whether the client is for internal purpose only. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>require_ev</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-master-panel-clients" style="display: none">
            <input type="radio" name="require_ev"
                   value="true"
                   data-endpoint="POSTapi-master-panel-clients"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-master-panel-clients" style="display: none">
            <input type="radio" name="require_ev"
                   value="false"
                   data-endpoint="POSTapi-master-panel-clients"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Should email verification be required. Only applicable if user has permission. Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-master-panel-clients" style="display: none">
            <input type="radio" name="status"
                   value="true"
                   data-endpoint="POSTapi-master-panel-clients"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-master-panel-clients" style="display: none">
            <input type="radio" name="status"
                   value="false"
                   data-endpoint="POSTapi-master-panel-clients"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Should the client be activated immediately. Only applicable if user has permission. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>example</code></b>&nbsp;&nbsp;
<small>{</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="example"                data-endpoint="POSTapi-master-panel-clients"
               value="consequatur"
               data-component="body">
    <br>
<p>&quot;first_name&quot;: &quot;John&quot;,
&quot;last_name&quot;: &quot;Doe&quot;,
&quot;company&quot;: &quot;Acme Corp&quot;,
&quot;email&quot;: &quot;john@example.com&quot;,
&quot;phone&quot;: &quot;1234567890&quot;,
&quot;country_code&quot;: &quot;+1&quot;,
&quot;password&quot;: &quot;password123&quot;,
&quot;password_confirmation&quot;: &quot;password123&quot;,
&quot;address&quot;: &quot;123 Main St&quot;,
&quot;city&quot;: &quot;New York&quot;,
&quot;state&quot;: &quot;NY&quot;,
&quot;country&quot;: &quot;USA&quot;,
&quot;zip&quot;: &quot;10001&quot;,
&quot;dob&quot;: &quot;1990-01-01&quot;,
&quot;doj&quot;: &quot;2023-01-01&quot;,
&quot;country_iso_code&quot;: &quot;US&quot;,
&quot;internal_purpose&quot;: &quot;on&quot;,
&quot;require_ev&quot;: 0,
&quot;status&quot;: 1
} Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="client-management-PUTapi-master-panel-clients--client-">Update client details.</h2>

<p>
</p>

<p>Updates the specified client's information. Handles password updates,
profile photo upload, email verification logic, and account creation emails.</p>

<span id="example-requests-PUTapi-master-panel-clients--client-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/master-panel/clients/consequatur" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "first_name=consequatur"\
    --form "last_name=consequatur"\
    --form "company=consequatur"\
    --form "email=qkunze@example.com"\
    --form "phone=consequatur"\
    --form "country_code=consequatur"\
    --form "password=O[2UZ5ij-e/dl4m{o,"\
    --form "password_confirmation=consequatur"\
    --form "address=consequatur"\
    --form "city=consequatur"\
    --form "state=consequatur"\
    --form "country=consequatur"\
    --form "zip=consequatur"\
    --form "dob=consequatur"\
    --form "doj=consequatur"\
    --form "country_iso_code=consequatur"\
    --form "internal_purpose=consequatur"\
    --form "status=17"\
    --form "require_ev=17"\
    --form "upload=@C:\Users\Dikshita\AppData\Local\Temp\phpC43A.tmp" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/clients/consequatur"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('first_name', 'consequatur');
body.append('last_name', 'consequatur');
body.append('company', 'consequatur');
body.append('email', 'qkunze@example.com');
body.append('phone', 'consequatur');
body.append('country_code', 'consequatur');
body.append('password', 'O[2UZ5ij-e/dl4m{o,');
body.append('password_confirmation', 'consequatur');
body.append('address', 'consequatur');
body.append('city', 'consequatur');
body.append('state', 'consequatur');
body.append('country', 'consequatur');
body.append('zip', 'consequatur');
body.append('dob', 'consequatur');
body.append('doj', 'consequatur');
body.append('country_iso_code', 'consequatur');
body.append('internal_purpose', 'consequatur');
body.append('status', '17');
body.append('require_ev', '17');
body.append('upload', document.querySelector('input[name="upload"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-master-panel-clients--client-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;error&quot;: false,
  &quot;message&quot;:Client updated successfully,
 &quot;data[
data of the client ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;errors&quot;: {
        &quot;email&quot;: [
            &quot;The email has already been taken in users or clients.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;An unexpected error occurred while updating client details.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-master-panel-clients--client-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-master-panel-clients--client-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-master-panel-clients--client-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-master-panel-clients--client-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-master-panel-clients--client-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-master-panel-clients--client-" data-method="PUT"
      data-path="api/master-panel/clients/{client}"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-master-panel-clients--client-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-master-panel-clients--client-"
                    onclick="tryItOut('PUTapi-master-panel-clients--client-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-master-panel-clients--client-"
                    onclick="cancelTryOut('PUTapi-master-panel-clients--client-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-master-panel-clients--client-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/master-panel/clients/{client}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>client</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="client"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="consequatur"
               data-component="url">
    <br>
<p>The client. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the client to update. Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="first_name"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="consequatur"
               data-component="body">
    <br>
<p>Client's first name. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="consequatur"
               data-component="body">
    <br>
<p>Client's last name. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>company</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="company"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="consequatur"
               data-component="body">
    <br>
<p>nullable Client's company name. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Unique client email. Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="consequatur"
               data-component="body">
    <br>
<p>nullable Client phone number. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="country_code"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="consequatur"
               data-component="body">
    <br>
<p>nullable Country code. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="O[2UZ5ij-e/dl4m{o,"
               data-component="body">
    <br>
<p>nullable Password (required if client has no password and internal_purpose is off). Example: <code>O[2UZ5ij-e/dl4m{o,</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="consequatur"
               data-component="body">
    <br>
<p>required_with:password Must match password. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="consequatur"
               data-component="body">
    <br>
<p>nullable Client address. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="consequatur"
               data-component="body">
    <br>
<p>nullable Client city. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>state</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="state"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="consequatur"
               data-component="body">
    <br>
<p>nullable Client state. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="country"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="consequatur"
               data-component="body">
    <br>
<p>nullable Client country. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>zip</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="zip"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="consequatur"
               data-component="body">
    <br>
<p>nullable Postal/zip code. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>dob</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="dob"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="consequatur"
               data-component="body">
    <br>
<p>nullable Date of birth. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>doj</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="doj"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="consequatur"
               data-component="body">
    <br>
<p>nullable Date of joining. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_iso_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="country_iso_code"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="consequatur"
               data-component="body">
    <br>
<p>nullable ISO code for country. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>internal_purpose</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="internal_purpose"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="consequatur"
               data-component="body">
    <br>
<p>nullable Set to 'on' for internal clients (password can be nullable). Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="status"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="17"
               data-component="body">
    <br>
<p>nullable Client status. Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>require_ev</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="require_ev"                data-endpoint="PUTapi-master-panel-clients--client-"
               value="17"
               data-component="body">
    <br>
<p>nullable Email verification required flag (0 or 1). Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>upload</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="file" style="display: none"
                              name="upload"                data-endpoint="PUTapi-master-panel-clients--client-"
               value=""
               data-component="body">
    <br>
<p>nullable Profile photo file upload. Example: <code>C:\Users\Dikshita\AppData\Local\Temp\phpC43A.tmp</code></p>
        </div>
        </form>

                    <h2 id="client-management-DELETEapi-master-panel-clients--id-">Delete a client.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-master-panel-clients--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/clients/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/clients/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-clients--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Client deleted successfully.&quot;,
    &quot;id&quot;: 28,
    &quot;title&quot;: &quot;hrdeep Raa&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;No query results for model [App\\Models\\Client] 15&quot;,
    &quot;message&quot;: &quot;Client not found.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;Exception message&quot;,
    &quot;message&quot;: &quot;Client could not be deleted.&quot;,
    &quot;line&quot;: 123,
    &quot;file&quot;: &quot;path/to/file&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-clients--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-clients--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-clients--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-clients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-clients--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-clients--id-" data-method="DELETE"
      data-path="api/master-panel/clients/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-clients--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-clients--id-"
                    onclick="tryItOut('DELETEapi-master-panel-clients--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-clients--id-"
                    onclick="cancelTryOut('DELETEapi-master-panel-clients--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-clients--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/clients/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-clients--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-clients--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-master-panel-clients--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the client. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>client</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client"                data-endpoint="DELETEapi-master-panel-clients--id-"
               value="15"
               data-component="url">
    <br>
<p>The ID of the client to delete. Example: <code>15</code></p>
            </div>
                    </form>

                    <h2 id="client-management-DELETEapi-master-panel-destroy-multiple-clients">Delete multiple clients.</h2>

<p>
</p>

<p>Deletes multiple clients by their IDs along with their associated todos.</p>

<span id="example-requests-DELETEapi-master-panel-destroy-multiple-clients">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/destroy-multiple-clients" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"ids\": [
        1,
        2,
        3
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/destroy-multiple-clients"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "ids": [
        1,
        2,
        3
    ]
};

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-destroy-multiple-clients">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Clients(s) deleted successfully.&quot;,
    &quot;id&quot;: [
        1,
        2,
        3
    ],
    &quot;titles&quot;: [
        &quot;John Doe&quot;,
        &quot;Jane Smith&quot;,
        &quot;Alice Johnson&quot;
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Client not found.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;ids&quot;: [
            &quot;The ids field is required.&quot;
        ],
        &quot;ids.0&quot;: [
            &quot;The selected ids.0 is invalid.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-destroy-multiple-clients" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-destroy-multiple-clients"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-destroy-multiple-clients"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-destroy-multiple-clients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-destroy-multiple-clients">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-destroy-multiple-clients" data-method="DELETE"
      data-path="api/master-panel/destroy-multiple-clients"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-destroy-multiple-clients', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-destroy-multiple-clients"
                    onclick="tryItOut('DELETEapi-master-panel-destroy-multiple-clients');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-destroy-multiple-clients"
                    onclick="cancelTryOut('DELETEapi-master-panel-destroy-multiple-clients');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-destroy-multiple-clients"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/destroy-multiple-clients</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-destroy-multiple-clients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-destroy-multiple-clients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
 &nbsp;
<br>
<p>An array of client IDs to delete.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>*</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ids.*"                data-endpoint="DELETEapi-master-panel-destroy-multiple-clients"
               value="17"
               data-component="body">
    <br>
<p>Each client ID must exist in the clients table. Example: <code>17</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                <h1 id="priority">Priority</h1>

    

                                <h2 id="priority-POSTapi-master-panel-priorities">Create a new priority</h2>

<p>
</p>

<p>This endpoint allows you to create a new priority with a title and color. It automatically generates a unique slug and assigns the current admin as the creator.</p>

<span id="example-requests-POSTapi-master-panel-priorities">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/priorities" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"High Priority\",
    \"color\": \"#FF0000\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/priorities"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "High Priority",
    "color": "#FF0000"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-priorities">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Priority created successfully.&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 7,
        &quot;title&quot;: &quot;High Priority&quot;,
        &quot;slug&quot;: &quot;high-priority&quot;,
        &quot;color&quot;: &quot;#FF0000&quot;,
        &quot;admin_id&quot;: 1,
        &quot;created_at&quot;: &quot;2025-06-04T14:25:30.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-04T14:25:30.000000Z&quot;
    },
    &quot;id&quot;: 7
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;title&quot;: [
            &quot;The title field is required.&quot;
        ],
        &quot;color&quot;: [
            &quot;The color field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;Exception message here&quot;,
    &quot;message&quot;: &quot;Priority could not be created.&quot;,
    &quot;line&quot;: 45,
    &quot;file&quot;: &quot;PriorityController.php&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-priorities" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-priorities"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-priorities"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-priorities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-priorities">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-priorities" data-method="POST"
      data-path="api/master-panel/priorities"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-priorities', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-priorities"
                    onclick="tryItOut('POSTapi-master-panel-priorities');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-priorities"
                    onclick="cancelTryOut('POSTapi-master-panel-priorities');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-priorities"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/priorities</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-priorities"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-priorities"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-master-panel-priorities"
               value="High Priority"
               data-component="body">
    <br>
<p>The title of the priority. Example: <code>High Priority</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color"                data-endpoint="POSTapi-master-panel-priorities"
               value="#FF0000"
               data-component="body">
    <br>
<p>The color associated with the priority (hex code or color name). Example: <code>#FF0000</code></p>
        </div>
        </form>

                    <h2 id="priority-PUTapi-master-panel-priorities--priority-">Update an existing priority.</h2>

<p>
</p>

<p>This endpoint updates the title, color, and slug of an existing priority record.
The priority is identified by its ID.</p>

<span id="example-requests-PUTapi-master-panel-priorities--priority-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/master-panel/priorities/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"id\": 10,
    \"title\": \"High\",
    \"color\": \"#FF0000\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/priorities/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 10,
    "title": "High",
    "color": "#FF0000"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-master-panel-priorities--priority-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Priority updated successfully.&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 10,
        &quot;title&quot;: &quot;High&quot;,
        &quot;color&quot;: &quot;#FF0000&quot;,
        &quot;slug&quot;: &quot;high&quot;
    },
    &quot;id&quot;: 10
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Priority not found.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Validation error.&quot;,
    &quot;errors&quot;: {
        &quot;title&quot;: [
            &quot;The title field is required.&quot;
        ],
        &quot;color&quot;: [
            &quot;The color field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Priority could not be updated due to server error.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-master-panel-priorities--priority-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-master-panel-priorities--priority-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-master-panel-priorities--priority-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-master-panel-priorities--priority-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-master-panel-priorities--priority-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-master-panel-priorities--priority-" data-method="PUT"
      data-path="api/master-panel/priorities/{priority}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-master-panel-priorities--priority-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-master-panel-priorities--priority-"
                    onclick="tryItOut('PUTapi-master-panel-priorities--priority-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-master-panel-priorities--priority-"
                    onclick="cancelTryOut('PUTapi-master-panel-priorities--priority-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-master-panel-priorities--priority-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/master-panel/priorities/{priority}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-master-panel-priorities--priority-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-master-panel-priorities--priority-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>priority</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="priority"                data-endpoint="PUTapi-master-panel-priorities--priority-"
               value="consequatur"
               data-component="url">
    <br>
<p>The priority. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-master-panel-priorities--priority-"
               value="10"
               data-component="body">
    <br>
<p>The ID of the priority to update. Example: <code>10</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-master-panel-priorities--priority-"
               value="High"
               data-component="body">
    <br>
<p>The new title of the priority. Example: <code>High</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color"                data-endpoint="PUTapi-master-panel-priorities--priority-"
               value="#FF0000"
               data-component="body">
    <br>
<p>The new color code for the priority. Example: <code>#FF0000</code></p>
        </div>
        </form>

                    <h2 id="priority-DELETEapi-master-panel-priorities--priority-">Delete a priority.</h2>

<p>
</p>

<p>This endpoint deletes a specific priority by its ID.
Before deletion, it detaches the priority from all related projects and tasks.</p>

<span id="example-requests-DELETEapi-master-panel-priorities--priority-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/priorities/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/priorities/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-priorities--priority-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Priority deleted successfully.&quot;,
    &quot;id&quot;: 5,
    &quot;title&quot;: &quot;High Priority&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;No query results for model [App\\Models\\Priority] 999&quot;,
    &quot;message&quot;: &quot;Priority not found.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;Exception message here&quot;,
    &quot;message&quot;: &quot;Priority could not be deleted.&quot;,
    &quot;line&quot;: 42,
    &quot;file&quot;: &quot;PriorityController.php&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-priorities--priority-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-priorities--priority-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-priorities--priority-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-priorities--priority-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-priorities--priority-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-priorities--priority-" data-method="DELETE"
      data-path="api/master-panel/priorities/{priority}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-priorities--priority-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-priorities--priority-"
                    onclick="tryItOut('DELETEapi-master-panel-priorities--priority-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-priorities--priority-"
                    onclick="cancelTryOut('DELETEapi-master-panel-priorities--priority-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-priorities--priority-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/priorities/{priority}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-priorities--priority-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-priorities--priority-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>priority</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="priority"                data-endpoint="DELETEapi-master-panel-priorities--priority-"
               value="consequatur"
               data-component="url">
    <br>
<p>The priority. Example: <code>consequatur</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-master-panel-priorities--priority-"
               value="5"
               data-component="url">
    <br>
<p>The ID of the priority to delete. Example: <code>5</code></p>
            </div>
                    </form>

                    <h2 id="priority-GETapi-master-panel-priorities--id--">Get priorities list or a specific priority.</h2>

<p>
</p>

<p>This endpoint allows fetching either a paginated list of priorities or a single priority by providing its ID.
It supports optional searching, sorting, and pagination when listing all priorities.</p>

<span id="example-requests-GETapi-master-panel-priorities--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/priorities/3?search=Urgent&amp;sort=title&amp;order=ASC&amp;limit=10" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/priorities/3"
);

const params = {
    "search": "Urgent",
    "sort": "title",
    "order": "ASC",
    "limit": "10",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-priorities--id--">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Priorities fetched successfully.&quot;,
    &quot;data&quot;: {
        &quot;rows&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;title&quot;: &quot;High&quot;,
                &quot;color&quot;: &quot;red&quot;,
                &quot;created_at&quot;: &quot;2024-06-01&quot;,
                &quot;updated_at&quot;: &quot;2024-06-01&quot;
            }
        ],
        &quot;total&quot;: 1,
        &quot;current_page&quot;: 1,
        &quot;last_page&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Priority fetched successfully.&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;title&quot;: &quot;High&quot;,
        &quot;color&quot;: &quot;red&quot;,
        &quot;created_at&quot;: &quot;2024-06-01&quot;,
        &quot;updated_at&quot;: &quot;2024-06-01&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;No query results for model [App\\Models\\Priority] 3&quot;,
    &quot;message&quot;: &quot;Priority not found.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;Exception message here&quot;,
    &quot;message&quot;: &quot;Failed to fetch priorities.&quot;,
    &quot;line&quot;: 101,
    &quot;file&quot;: &quot;PriorityController.php&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-priorities--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-priorities--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-priorities--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-priorities--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-priorities--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-priorities--id--" data-method="GET"
      data-path="api/master-panel/priorities/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-priorities--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-priorities--id--"
                    onclick="tryItOut('GETapi-master-panel-priorities--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-priorities--id--"
                    onclick="cancelTryOut('GETapi-master-panel-priorities--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-priorities--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/priorities/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-priorities--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-priorities--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-master-panel-priorities--id--"
               value="3"
               data-component="url">
    <br>
<p>optional The ID of the priority to retrieve. Example: <code>3</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>search</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="search"                data-endpoint="GETapi-master-panel-priorities--id--"
               value="Urgent"
               data-component="query">
    <br>
<p>optional Search term for filtering by title or ID. Example: <code>Urgent</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sort</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sort"                data-endpoint="GETapi-master-panel-priorities--id--"
               value="title"
               data-component="query">
    <br>
<p>optional Field to sort by. Defaults to id. Example: <code>title</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="order"                data-endpoint="GETapi-master-panel-priorities--id--"
               value="ASC"
               data-component="query">
    <br>
<p>optional Sort order. Either ASC or DESC. Defaults to DESC. Example: <code>ASC</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>limit</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="limit"                data-endpoint="GETapi-master-panel-priorities--id--"
               value="10"
               data-component="query">
    <br>
<p>optional Number of records per page. Defaults to 15. Example: <code>10</code></p>
            </div>
                </form>

                    <h2 id="priority-DELETEapi-master-panel-multiple-delete">Delete multiple priorities.</h2>

<p>
</p>

<p>This endpoint deletes one or more priorities based on the provided array of IDs.
It also detaches the priorities from any associated projects and tasks before deletion.
Each priority must exist in the database.</p>

<span id="example-requests-DELETEapi-master-panel-multiple-delete">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/multiple-delete" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"ids\": [
        1,
        2,
        3
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/multiple-delete"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "ids": [
        1,
        2,
        3
    ]
};

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-multiple-delete">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Priority/Priorities deleted successfully.&quot;,
    &quot;ids&quot;: [
        1,
        2,
        3
    ],
    &quot;titles&quot;: [
        &quot;High&quot;,
        &quot;Medium&quot;,
        &quot;Low&quot;
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;ids.0&quot;: [
            &quot;The selected ids.0 is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;Exception message&quot;,
    &quot;message&quot;: &quot;Priorities could not be deleted.&quot;,
    &quot;line&quot;: 123,
    &quot;file&quot;: &quot;PriorityController.php&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-multiple-delete" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-multiple-delete"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-multiple-delete"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-multiple-delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-multiple-delete">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-multiple-delete" data-method="DELETE"
      data-path="api/master-panel/multiple-delete"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-multiple-delete', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-multiple-delete"
                    onclick="tryItOut('DELETEapi-master-panel-multiple-delete');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-multiple-delete"
                    onclick="cancelTryOut('DELETEapi-master-panel-multiple-delete');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-multiple-delete"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/multiple-delete</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-multiple-delete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-multiple-delete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
 &nbsp;
<br>
<p>The list of priority IDs to delete.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>*</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ids.*"                data-endpoint="DELETEapi-master-panel-multiple-delete"
               value="1"
               data-component="body">
    <br>
<p>Each ID must correspond to an existing priority. Example: <code>1</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                <h1 id="user-managemant">User Managemant</h1>

    <p>This endpoint allows admins to create a new user within a workspace.
Email uniqueness is checked across both users and clients.
Optionally, a verification email and account creation email are sent based on system configuration.</p>

                                <h2 id="user-managemant-POSTapi-master-panel-user">Create a new user</h2>

<p>
</p>



<span id="example-requests-POSTapi-master-panel-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/user" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json" \
    --data "{
    \"first_name\": \"John\",
    \"last_name\": \"Doe\",
    \"email\": \"john.smith@example.com\",
    \"password\": \"secret123\",
    \"password_confirmation\": \"secret123\",
    \"address\": \"123 Main St\",
    \"phone\": \"+1234567890\",
    \"country_code\": \"+91\",
    \"city\": \"Mumbai\",
    \"state\": \"Maharashtra\",
    \"country\": \"India\",
    \"zip\": \"400001\",
    \"dob\": \"1990-01-01\",
    \"doj\": \"2022-01-01\",
    \"role\": \"admin\",
    \"country_iso_code\": \"IN\",
    \"require_ev\": true,
    \"status\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/user"
);

const headers = {
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

let body = {
    "first_name": "John",
    "last_name": "Doe",
    "email": "john.smith@example.com",
    "password": "secret123",
    "password_confirmation": "secret123",
    "address": "123 Main St",
    "phone": "+1234567890",
    "country_code": "+91",
    "city": "Mumbai",
    "state": "Maharashtra",
    "country": "India",
    "zip": "400001",
    "dob": "1990-01-01",
    "doj": "2022-01-01",
    "role": "admin",
    "country_iso_code": "IN",
    "require_ev": true,
    "status": true
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-user">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;User created successfully.&quot;,
    &quot;id&quot;: 54,
    &quot;data&quot;: {
        &quot;id&quot;: 54,
        &quot;first_name&quot;: &quot;John&quot;,
        &quot;last_name&quot;: &quot;Doe&quot;,
        &quot;full_name&quot;: &quot;John Doe&quot;,
        &quot;email&quot;: &quot;john.smith@example.com&quot;,
        &quot;phone&quot;: &quot;+1234567890&quot;,
        &quot;address&quot;: &quot;123 Main St&quot;,
        &quot;country_code&quot;: &quot;+91&quot;,
        &quot;city&quot;: &quot;Mumbai&quot;,
        &quot;state&quot;: &quot;Maharashtra&quot;,
        &quot;country&quot;: &quot;India&quot;,
        &quot;zip&quot;: &quot;400001&quot;,
        &quot;dob&quot;: null,
        &quot;doj&quot;: null,
        &quot;role&quot;: &quot;admin&quot;,
        &quot;status&quot;: 1,
        &quot;email_verified&quot;: false,
        &quot;photo_url&quot;: &quot;http://localhost:8000/storage/photos/no-image.jpg&quot;,
        &quot;created_at&quot;: &quot;2025-06-11 06:48:45&quot;,
        &quot;updated_at&quot;: &quot;2025-06-11 06:48:45&quot;,
        &quot;require_ev&quot;: 1
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;errors&quot;: {
        &quot;email&quot;: [
            &quot;The email has already been taken in users or clients.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;User couldn&#039;t be created, please make sure email settings are operational.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-user" data-method="POST"
      data-path="api/master-panel/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-user"
                    onclick="tryItOut('POSTapi-master-panel-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-user"
                    onclick="cancelTryOut('POSTapi-master-panel-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="POSTapi-master-panel-user"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="first_name"                data-endpoint="POSTapi-master-panel-user"
               value="John"
               data-component="body">
    <br>
<p>The user's first name. Example: <code>John</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="POSTapi-master-panel-user"
               value="Doe"
               data-component="body">
    <br>
<p>The user's last name. Example: <code>Doe</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-master-panel-user"
               value="john.smith@example.com"
               data-component="body">
    <br>
<p>The user's unique email address. Must not exist in users or clients. Example: <code>john.smith@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-master-panel-user"
               value="secret123"
               data-component="body">
    <br>
<p>The password (minimum 6 characters). Example: <code>secret123</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-master-panel-user"
               value="secret123"
               data-component="body">
    <br>
<p>Must match the password. Example: <code>secret123</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="POSTapi-master-panel-user"
               value="123 Main St"
               data-component="body">
    <br>
<p>The user's address. Example: <code>123 Main St</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-master-panel-user"
               value="+1234567890"
               data-component="body">
    <br>
<p>The user's phone number. Example: <code>+1234567890</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="country_code"                data-endpoint="POSTapi-master-panel-user"
               value="+91"
               data-component="body">
    <br>
<p>Country dialing code. Example: <code>+91</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="POSTapi-master-panel-user"
               value="Mumbai"
               data-component="body">
    <br>
<p>The city. Example: <code>Mumbai</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>state</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="state"                data-endpoint="POSTapi-master-panel-user"
               value="Maharashtra"
               data-component="body">
    <br>
<p>The state. Example: <code>Maharashtra</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="country"                data-endpoint="POSTapi-master-panel-user"
               value="India"
               data-component="body">
    <br>
<p>The country. Example: <code>India</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>zip</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="zip"                data-endpoint="POSTapi-master-panel-user"
               value="400001"
               data-component="body">
    <br>
<p>The zip/postal code. Example: <code>400001</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>dob</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="dob"                data-endpoint="POSTapi-master-panel-user"
               value="1990-01-01"
               data-component="body">
    <br>
<p>The user's date of birth (in 'Y-m-d' format). Example: <code>1990-01-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>doj</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="doj"                data-endpoint="POSTapi-master-panel-user"
               value="2022-01-01"
               data-component="body">
    <br>
<p>The user's date of joining (in 'Y-m-d' format). Example: <code>2022-01-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="role"                data-endpoint="POSTapi-master-panel-user"
               value="admin"
               data-component="body">
    <br>
<p>The role to assign to the user. Example: <code>admin</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_iso_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="country_iso_code"                data-endpoint="POSTapi-master-panel-user"
               value="IN"
               data-component="body">
    <br>
<p>Optional country ISO code. Example: <code>IN</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>require_ev</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-master-panel-user" style="display: none">
            <input type="radio" name="require_ev"
                   value="true"
                   data-endpoint="POSTapi-master-panel-user"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-master-panel-user" style="display: none">
            <input type="radio" name="require_ev"
                   value="false"
                   data-endpoint="POSTapi-master-panel-user"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Whether email verification is required. 1 = yes, 0 = no. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-master-panel-user" style="display: none">
            <input type="radio" name="status"
                   value="true"
                   data-endpoint="POSTapi-master-panel-user"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-master-panel-user" style="display: none">
            <input type="radio" name="status"
                   value="false"
                   data-endpoint="POSTapi-master-panel-user"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Whether the user account should be active immediately. Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="user-managemant-PUTapi-master-panel-user--id-">Update user details.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint allows updating user profile information. The request must be sent in <strong>raw JSON format</strong>.</p>
<p>📎 Required Headers:</p>
<ul>
<li><code>Authorization: Bearer {YOUR_API_TOKEN}</code></li>
<li><code>workspace_id: {WORKSPACE_ID}</code></li>
<li><code>Content-Type: application/json</code></li>
</ul>

<span id="example-requests-PUTapi-master-panel-user--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/master-panel/user/18" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"first_name\": \"John\",
    \"last_name\": \"Doe\",
    \"phone\": \"+1234567890\",
    \"country_code\": \"US\",
    \"address\": \"123 Main St\",
    \"city\": \"New York\",
    \"state\": \"NY\",
    \"country\": \"USA\",
    \"zip\": \"10001\",
    \"dob\": \"1990-01-01\",
    \"doj\": \"2020-01-01\",
    \"password\": \"newsecret\",
    \"password_confirmation\": \"newsecret\",
    \"country_iso_code\": \"US\",
    \"status\": true,
    \"role\": \"admin\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/user/18"
);

const headers = {
    "workspace_id": "2",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "John",
    "last_name": "Doe",
    "phone": "+1234567890",
    "country_code": "US",
    "address": "123 Main St",
    "city": "New York",
    "state": "NY",
    "country": "USA",
    "zip": "10001",
    "dob": "1990-01-01",
    "doj": "2020-01-01",
    "password": "newsecret",
    "password_confirmation": "newsecret",
    "country_iso_code": "US",
    "status": true,
    "role": "admin"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-master-panel-user--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;User updated successfully.&quot;,
    &quot;id&quot;: 18,
    &quot;data&quot;: {
        &quot;id&quot;: 18,
        &quot;first_name&quot;: &quot;John&quot;,
        &quot;last_name&quot;: &quot;Doe&quot;,
        &quot;full_name&quot;: &quot;John Doe&quot;,
        &quot;email&quot;: &quot;john.doe27@example.com&quot;,
        &quot;phone&quot;: &quot;+1234567890&quot;,
        &quot;address&quot;: &quot;123 Main St&quot;,
        &quot;country_code&quot;: &quot;US&quot;,
        &quot;city&quot;: &quot;New York&quot;,
        &quot;state&quot;: &quot;NY&quot;,
        &quot;country&quot;: &quot;USA&quot;,
        &quot;zip&quot;: &quot;10001&quot;,
        &quot;dob&quot;: null,
        &quot;doj&quot;: null,
        &quot;role&quot;: &quot;admin&quot;,
        &quot;status&quot;: true,
        &quot;email_verified&quot;: true,
        &quot;photo_url&quot;: &quot;http://localhost:8000/storage/photos/no-image.jpg&quot;,
        &quot;created_at&quot;: &quot;2025-06-10 10:00:16&quot;,
        &quot;updated_at&quot;: &quot;2025-06-11 06:41:43&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;first_name&quot;: [
            &quot;The first name field is required.&quot;
        ],
        &quot;password&quot;: [
            &quot;The password must be at least 6 characters.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-master-panel-user--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-master-panel-user--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-master-panel-user--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-master-panel-user--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-master-panel-user--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-master-panel-user--id-" data-method="PUT"
      data-path="api/master-panel/user/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-master-panel-user--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-master-panel-user--id-"
                    onclick="tryItOut('PUTapi-master-panel-user--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-master-panel-user--id-"
                    onclick="cancelTryOut('PUTapi-master-panel-user--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-master-panel-user--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/master-panel/user/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="PUTapi-master-panel-user--id-"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-master-panel-user--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-master-panel-user--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-master-panel-user--id-"
               value="18"
               data-component="url">
    <br>
<p>The ID of the user to update. Example: <code>18</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="first_name"                data-endpoint="PUTapi-master-panel-user--id-"
               value="John"
               data-component="body">
    <br>
<p>The user's first name. Example: <code>John</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="last_name"                data-endpoint="PUTapi-master-panel-user--id-"
               value="Doe"
               data-component="body">
    <br>
<p>The user's last name. Example: <code>Doe</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PUTapi-master-panel-user--id-"
               value="+1234567890"
               data-component="body">
    <br>
<p>nullable The user's phone number. Example: <code>+1234567890</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="country_code"                data-endpoint="PUTapi-master-panel-user--id-"
               value="US"
               data-component="body">
    <br>
<p>nullable Country calling code. Example: <code>US</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="PUTapi-master-panel-user--id-"
               value="123 Main St"
               data-component="body">
    <br>
<p>nullable Street address. Example: <code>123 Main St</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="PUTapi-master-panel-user--id-"
               value="New York"
               data-component="body">
    <br>
<p>nullable City name. Example: <code>New York</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>state</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="state"                data-endpoint="PUTapi-master-panel-user--id-"
               value="NY"
               data-component="body">
    <br>
<p>nullable State name. Example: <code>NY</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="country"                data-endpoint="PUTapi-master-panel-user--id-"
               value="USA"
               data-component="body">
    <br>
<p>nullable Country name. Example: <code>USA</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>zip</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="zip"                data-endpoint="PUTapi-master-panel-user--id-"
               value="10001"
               data-component="body">
    <br>
<p>nullable Zip or postal code. Example: <code>10001</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>dob</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="dob"                data-endpoint="PUTapi-master-panel-user--id-"
               value="1990-01-01"
               data-component="body">
    <br>
<p>nullable Date of birth (Y-m-d). Example: <code>1990-01-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>doj</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="doj"                data-endpoint="PUTapi-master-panel-user--id-"
               value="2020-01-01"
               data-component="body">
    <br>
<p>nullable Date of joining (Y-m-d). Example: <code>2020-01-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="PUTapi-master-panel-user--id-"
               value="newsecret"
               data-component="body">
    <br>
<p>nullable Minimum 6 characters to change password. Example: <code>newsecret</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="PUTapi-master-panel-user--id-"
               value="newsecret"
               data-component="body">
    <br>
<p>required_with:password Must match the password. Example: <code>newsecret</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>country_iso_code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="country_iso_code"                data-endpoint="PUTapi-master-panel-user--id-"
               value="US"
               data-component="body">
    <br>
<p>nullable ISO country code. Example: <code>US</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-master-panel-user--id-" style="display: none">
            <input type="radio" name="status"
                   value="true"
                   data-endpoint="PUTapi-master-panel-user--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-master-panel-user--id-" style="display: none">
            <input type="radio" name="status"
                   value="false"
                   data-endpoint="PUTapi-master-panel-user--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>nullable Whether the user is active. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="role"                data-endpoint="PUTapi-master-panel-user--id-"
               value="admin"
               data-component="body">
    <br>
<p>nullable Role to assign (not for admins). Example: <code>admin</code></p>
        </div>
        </form>

                    <h2 id="user-managemant-DELETEapi-master-panel-user--id-">Delete a user</h2>

<p>
</p>



<span id="example-requests-DELETEapi-master-panel-user--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/user/6" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/user/6"
);

const headers = {
    "workspace_id": "2",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-user--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;User deleted successfully.&quot;,
    &quot;id&quot;: &quot;6&quot;,
    &quot;title&quot;: &quot;John Doe&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\User] 999&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Failed to delete User due to internal server error.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-user--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-user--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-user--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-user--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-user--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-user--id-" data-method="DELETE"
      data-path="api/master-panel/user/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-user--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-user--id-"
                    onclick="tryItOut('DELETEapi-master-panel-user--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-user--id-"
                    onclick="cancelTryOut('DELETEapi-master-panel-user--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-user--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/user/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="DELETEapi-master-panel-user--id-"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-user--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-user--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-master-panel-user--id-"
               value="6"
               data-component="url">
    <br>
<p>The ID of the user to delete. Example: <code>6</code></p>
            </div>
                    </form>

                    <h2 id="user-managemant-GETapi-master-panel-user--id--">Get users list or specific user</h2>

<p>
</p>



<span id="example-requests-GETapi-master-panel-user--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/user/5?search=John&amp;sort=first_name&amp;order=ASC&amp;status=1&amp;role_ids[]=1&amp;role_ids[]=2&amp;type=project&amp;typeId=3&amp;limit=10&amp;isApi=1" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/user/5"
);

const params = {
    "search": "John",
    "sort": "first_name",
    "order": "ASC",
    "status": "1",
    "role_ids[0]": "1",
    "role_ids[1]": "2",
    "type": "project",
    "typeId": "3",
    "limit": "10",
    "isApi": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "workspace_id": "2",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-user--id--">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Users retrieved successfully&quot;,
    &quot;total&quot;: 2,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;first_name&quot;: &quot;John&quot;,
            &quot;last_name&quot;: &quot;Doe&quot;,
            &quot;email&quot;: &quot;john@example.com&quot;,
            &quot;phone&quot;: &quot;+91 9876543210&quot;,
            &quot;status&quot;: 1,
            &quot;created_at&quot;: &quot;2024-01-01 10:00:00&quot;,
            &quot;updated_at&quot;: &quot;2024-06-01 09:00:00&quot;,
            &quot;role&quot;: &quot;Admin&quot;,
            &quot;profile&quot;: &quot;...&quot;,
            &quot;assigned&quot;: &quot;...&quot;,
            &quot;actions&quot;: &quot;...&quot;
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;error&quot;: false,
  &quot;message&quot;: &quot;User retrieved successfully&quot;,
  &quot;data&quot;: {
    &quot;id&quot;: 5,
    &quot;first_name&quot;: &quot;Jane&quot;,
    &quot;last_name&quot;: &quot;Smith&quot;,
    &quot;email&quot;: &quot;jane@example.com&quot;,
    &quot;phone&quot;: &quot;+91 1234567890&quot;,
    &quot;status&quot;: 1,
    ...
  }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;User not found&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;Exception message&quot;,
    &quot;message&quot;: &quot;Failed to retrieve users&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-user--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-user--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-user--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-user--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-user--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-user--id--" data-method="GET"
      data-path="api/master-panel/user/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-user--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-user--id--"
                    onclick="tryItOut('GETapi-master-panel-user--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-user--id--"
                    onclick="cancelTryOut('GETapi-master-panel-user--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-user--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/user/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="GETapi-master-panel-user--id--"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-user--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-user--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-master-panel-user--id--"
               value="5"
               data-component="url">
    <br>
<p>optional The ID of the user to retrieve. Leave blank to get all users. Example: <code>5</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>search</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="search"                data-endpoint="GETapi-master-panel-user--id--"
               value="John"
               data-component="query">
    <br>
<p>optional Filter users by name, email, or phone. Example: <code>John</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sort</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sort"                data-endpoint="GETapi-master-panel-user--id--"
               value="first_name"
               data-component="query">
    <br>
<p>optional Field to sort by. Default is <code>id</code>. Example: <code>first_name</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="order"                data-endpoint="GETapi-master-panel-user--id--"
               value="ASC"
               data-component="query">
    <br>
<p>optional Sort order: <code>ASC</code> or <code>DESC</code>. Default is <code>DESC</code>. Example: <code>ASC</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="status"                data-endpoint="GETapi-master-panel-user--id--"
               value="1"
               data-component="query">
    <br>
<p>optional Filter users by status (1 for active, 0 for inactive). Example: <code>1</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>role_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="role_ids[0]"                data-endpoint="GETapi-master-panel-user--id--"
               data-component="query">
        <input type="text" style="display: none"
               name="role_ids[1]"                data-endpoint="GETapi-master-panel-user--id--"
               data-component="query">
    <br>
<p>optional Filter users by one or more role IDs.</p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="GETapi-master-panel-user--id--"
               value="project"
               data-component="query">
    <br>
<p>optional Source of user relation (<code>project</code> or <code>task</code>). Example: <code>project</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>typeId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="typeId"                data-endpoint="GETapi-master-panel-user--id--"
               value="3"
               data-component="query">
    <br>
<p>optional ID of the related project or task. Required if <code>type</code> is provided. Example: <code>3</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>limit</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="limit"                data-endpoint="GETapi-master-panel-user--id--"
               value="10"
               data-component="query">
    <br>
<p>optional Number of results per page. Example: <code>10</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="GETapi-master-panel-user--id--" style="display: none">
            <input type="radio" name="isApi"
                   value="1"
                   data-endpoint="GETapi-master-panel-user--id--"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-master-panel-user--id--" style="display: none">
            <input type="radio" name="isApi"
                   value="0"
                   data-endpoint="GETapi-master-panel-user--id--"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>optional Indicates API context (used internally). Default: true. Example: <code>true</code></p>
            </div>
                </form>

                <h1 id="workspace-managemant">Workspace Managemant</h1>

    <p>This endpoint allows authenticated users to create a new workspace. It automatically associates users and clients,
sets the workspace as primary (if requested), and logs activity. Notifications are sent to the participants.</p>

                                <h2 id="workspace-managemant-POSTapi-master-panel-workspace">Create a new workspace</h2>

<p>
</p>



<span id="example-requests-POSTapi-master-panel-workspace">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/workspace" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json" \
    --data "{
    \"title\": \"Design Team\",
    \"user_ids\": [
        3,
        5
    ],
    \"client_ids\": [
        101,
        102
    ],
    \"primaryWorkspace\": true,
    \"isApi\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/workspace"
);

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

let body = {
    "title": "Design Team",
    "user_ids": [
        3,
        5
    ],
    "client_ids": [
        101,
        102
    ],
    "primaryWorkspace": true,
    "isApi": true
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-workspace">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Workspace created successfully.&quot;,
    &quot;id&quot;: 438,
    &quot;data&quot;: {
        &quot;id&quot;: 438,
        &quot;title&quot;: &quot;Design Team&quot;,
        &quot;is_primary&quot;: true,
        &quot;users&quot;: [
            {
                &quot;id&quot;: 7,
                &quot;first_name&quot;: &quot;Madhavan&quot;,
                &quot;last_name&quot;: &quot;Vaidya&quot;,
                &quot;photo&quot;: &quot;https://yourdomain.com/storage/photos/user.png&quot;
            }
        ],
        &quot;clients&quot;: [
            {
                &quot;id&quot;: 103,
                &quot;first_name&quot;: &quot;Test&quot;,
                &quot;last_name&quot;: &quot;Test&quot;,
                &quot;photo&quot;: &quot;https://yourdomain.com/storage/photos/no-image.jpg&quot;
            }
        ],
        &quot;created_at&quot;: &quot;07-08-2024 14:38:51&quot;,
        &quot;updated_at&quot;: &quot;07-08-2024 14:38:51&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;title&quot;: [
            &quot;The title field is required.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-workspace" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-workspace"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-workspace"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-workspace" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-workspace">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-workspace" data-method="POST"
      data-path="api/master-panel/workspace"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-workspace', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-workspace"
                    onclick="tryItOut('POSTapi-master-panel-workspace');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-workspace"
                    onclick="cancelTryOut('POSTapi-master-panel-workspace');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-workspace"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/workspace</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization"                data-endpoint="POSTapi-master-panel-workspace"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-workspace"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="POSTapi-master-panel-workspace"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-workspace"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-master-panel-workspace"
               value="Design Team"
               data-component="body">
    <br>
<p>The name of the workspace. Example: <code>Design Team</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="user_ids[0]"                data-endpoint="POSTapi-master-panel-workspace"
               data-component="body">
        <input type="text" style="display: none"
               name="user_ids[1]"                data-endpoint="POSTapi-master-panel-workspace"
               data-component="body">
    <br>
<p>List of user IDs to attach to the workspace.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="client_ids[0]"                data-endpoint="POSTapi-master-panel-workspace"
               data-component="body">
        <input type="text" style="display: none"
               name="client_ids[1]"                data-endpoint="POSTapi-master-panel-workspace"
               data-component="body">
    <br>
<p>List of client IDs to attach to the workspace.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>primaryWorkspace</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-master-panel-workspace" style="display: none">
            <input type="radio" name="primaryWorkspace"
                   value="true"
                   data-endpoint="POSTapi-master-panel-workspace"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-master-panel-workspace" style="display: none">
            <input type="radio" name="primaryWorkspace"
                   value="false"
                   data-endpoint="POSTapi-master-panel-workspace"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Indicates if this workspace should be set as the primary workspace. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-master-panel-workspace" style="display: none">
            <input type="radio" name="isApi"
                   value="true"
                   data-endpoint="POSTapi-master-panel-workspace"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-master-panel-workspace" style="display: none">
            <input type="radio" name="isApi"
                   value="false"
                   data-endpoint="POSTapi-master-panel-workspace"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Optional flag to return API-formatted response. Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="workspace-managemant-PUTapi-master-panel-workspace--id-">Update an existing workspace</h2>

<p>
</p>



<span id="example-requests-PUTapi-master-panel-workspace--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/master-panel/workspace/1" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json" \
    --data "{
    \"id\": 12,
    \"title\": \"Design Team\",
    \"user_ids\": [
        1,
        3
    ],
    \"client_ids\": [
        101,
        104
    ],
    \"primaryWorkspace\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/workspace/1"
);

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

let body = {
    "id": 12,
    "title": "Design Team",
    "user_ids": [
        1,
        3
    ],
    "client_ids": [
        101,
        104
    ],
    "primaryWorkspace": true
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-master-panel-workspace--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;id&quot;: 12,
    &quot;message&quot;: &quot;Workspace updated successfully.&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 12,
        &quot;title&quot;: &quot;Design Team&quot;,
        &quot;is_primary&quot;: true,
        &quot;users&quot;: [
            {
                &quot;id&quot;: 3,
                &quot;first_name&quot;: &quot;Alice&quot;,
                &quot;last_name&quot;: &quot;Doe&quot;,
                &quot;photo&quot;: &quot;https://example.com/photos/user3.jpg&quot;
            }
        ],
        &quot;clients&quot;: [
            {
                &quot;id&quot;: 101,
                &quot;first_name&quot;: &quot;Bob&quot;,
                &quot;last_name&quot;: &quot;Client&quot;,
                &quot;photo&quot;: &quot;https://example.com/photos/client101.jpg&quot;
            }
        ],
        &quot;created_at&quot;: &quot;07-08-2024 14:38:51&quot;,
        &quot;updated_at&quot;: &quot;07-08-2024 15:10:02&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Validation failed.&quot;,
    &quot;errors&quot;: {
        &quot;title&quot;: [
            &quot;The title field is required.&quot;
        ],
        &quot;id&quot;: [
            &quot;The selected id is invalid.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-master-panel-workspace--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-master-panel-workspace--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-master-panel-workspace--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-master-panel-workspace--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-master-panel-workspace--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-master-panel-workspace--id-" data-method="PUT"
      data-path="api/master-panel/workspace/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-master-panel-workspace--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-master-panel-workspace--id-"
                    onclick="tryItOut('PUTapi-master-panel-workspace--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-master-panel-workspace--id-"
                    onclick="cancelTryOut('PUTapi-master-panel-workspace--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-master-panel-workspace--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/master-panel/workspace/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization"                data-endpoint="PUTapi-master-panel-workspace--id-"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-master-panel-workspace--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="PUTapi-master-panel-workspace--id-"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-master-panel-workspace--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-master-panel-workspace--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the workspace. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-master-panel-workspace--id-"
               value="12"
               data-component="body">
    <br>
<p>The ID of the workspace. Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-master-panel-workspace--id-"
               value="Design Team"
               data-component="body">
    <br>
<p>The updated title of the workspace. Example: <code>Design Team</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="user_ids[0]"                data-endpoint="PUTapi-master-panel-workspace--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="user_ids[1]"                data-endpoint="PUTapi-master-panel-workspace--id-"
               data-component="body">
    <br>
<p>optional List of user IDs to associate with the workspace.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="client_ids[0]"                data-endpoint="PUTapi-master-panel-workspace--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="client_ids[1]"                data-endpoint="PUTapi-master-panel-workspace--id-"
               data-component="body">
    <br>
<p>optional List of client IDs to associate with the workspace.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>primaryWorkspace</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-master-panel-workspace--id-" style="display: none">
            <input type="radio" name="primaryWorkspace"
                   value="true"
                   data-endpoint="PUTapi-master-panel-workspace--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-master-panel-workspace--id-" style="display: none">
            <input type="radio" name="primaryWorkspace"
                   value="false"
                   data-endpoint="PUTapi-master-panel-workspace--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>optional Whether this workspace is set as the primary one. Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="workspace-managemant-DELETEapi-master-panel-workspace--id-">Delete a workspace</h2>

<p>
</p>



<span id="example-requests-DELETEapi-master-panel-workspace--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/workspace/12" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/workspace/12"
);

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-workspace--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Workspace deleted successfully.&quot;,
    &quot;id&quot;: &quot;3&quot;,
    &quot;title&quot;: &quot;Design Team Workspace&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Cannot delete the currently active workspace.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Workspace not found or already deleted.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-workspace--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-workspace--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-workspace--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-workspace--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-workspace--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-workspace--id-" data-method="DELETE"
      data-path="api/master-panel/workspace/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-workspace--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-workspace--id-"
                    onclick="tryItOut('DELETEapi-master-panel-workspace--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-workspace--id-"
                    onclick="cancelTryOut('DELETEapi-master-panel-workspace--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-workspace--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/workspace/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization"                data-endpoint="DELETEapi-master-panel-workspace--id-"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-workspace--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="DELETEapi-master-panel-workspace--id-"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-workspace--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-master-panel-workspace--id-"
               value="12"
               data-component="url">
    <br>
<p>The ID of the workspace. Example: <code>12</code></p>
            </div>
                    </form>

                    <h2 id="workspace-managemant-GETapi-master-panel-workspace--id--">Get a list of workspaces or a specific workspace.</h2>

<p>
</p>



<span id="example-requests-GETapi-master-panel-workspace--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/workspace/17?search=first&amp;sort=title&amp;order=ASC&amp;limit=20&amp;isApi=" \
    --header "Authorization: Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1" \
    --header "Accept: application/json" \
    --header "workspace_id: 2" \
    --header "Content-Type: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/workspace/17"
);

const params = {
    "search": "first",
    "sort": "title",
    "order": "ASC",
    "limit": "20",
    "isApi": "0",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1",
    "Accept": "application/json",
    "workspace_id": "2",
    "Content-Type": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-workspace--id--">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Workspaces retrieved successfully.&quot;,
    &quot;total&quot;: 2,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;title&quot;: &quot;Marketing Team&quot;,
            &quot;is_primary&quot;: true,
            &quot;users&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;first_name&quot;: &quot;Jane&quot;,
                    &quot;last_name&quot;: &quot;Doe&quot;,
                    &quot;photo&quot;: &quot;http://localhost:8000/storage/photos/no-image.jpg&quot;
                }
            ],
            &quot;clients&quot;: [
                {
                    &quot;id&quot;: 5,
                    &quot;first_name&quot;: &quot;Client&quot;,
                    &quot;last_name&quot;: &quot;One&quot;,
                    &quot;photo&quot;: &quot;http://localhost:8000/storage/photos/no-image.jpg&quot;
                }
            ],
            &quot;created_at&quot;: &quot;2025-05-19 09:53:37&quot;,
            &quot;updated_at&quot;: &quot;2025-06-05 11:35:18&quot;
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
 &quot;error&quot;: false,
 &quot;message&quot;: &quot;Workspace retrieved successfully.&quot;,
 &quot;data&quot;: {
     &quot;id&quot;: 2,
     &quot;title&quot;: &quot;Design Department&quot;,
     &quot;is_primary&quot;: false,
     &quot;users&quot;: [...],
     &quot;clients&quot;: [...],
     &quot;created_at&quot;: &quot;2025-05-19 09:53:37&quot;,
     &quot;updated_at&quot;: &quot;2025-06-05 11:35:18&quot;
 }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Workspace] 999.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Internal Server Error&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-workspace--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-workspace--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-workspace--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-workspace--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-workspace--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-workspace--id--" data-method="GET"
      data-path="api/master-panel/workspace/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-workspace--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-workspace--id--"
                    onclick="tryItOut('GETapi-master-panel-workspace--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-workspace--id--"
                    onclick="cancelTryOut('GETapi-master-panel-workspace--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-workspace--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/workspace/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization"                data-endpoint="GETapi-master-panel-workspace--id--"
               value="Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1"
               data-component="header">
    <br>
<p>Example: <code>Bearer 40|dbscqcapUOVnO7g5bKWLIJ2H2zBM0CBUH218XxaNf548c4f1</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-workspace--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace_id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace_id"                data-endpoint="GETapi-master-panel-workspace--id--"
               value="2"
               data-component="header">
    <br>
<p>Example: <code>2</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-workspace--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-master-panel-workspace--id--"
               value="17"
               data-component="url">
    <br>
<p>optional The ID of the workspace to retrieve. Example: <code>17</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>search</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="search"                data-endpoint="GETapi-master-panel-workspace--id--"
               value="first"
               data-component="query">
    <br>
<p>optional Search by workspace title or ID. Example: <code>first</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sort</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sort"                data-endpoint="GETapi-master-panel-workspace--id--"
               value="title"
               data-component="query">
    <br>
<p>optional Column to sort by. Default is &quot;id&quot;. Example: <code>title</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="order"                data-endpoint="GETapi-master-panel-workspace--id--"
               value="ASC"
               data-component="query">
    <br>
<p>optional Sort direction (&quot;ASC&quot; or &quot;DESC&quot;). Default is &quot;DESC&quot;. Example: <code>ASC</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>limit</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="limit"                data-endpoint="GETapi-master-panel-workspace--id--"
               value="20"
               data-component="query">
    <br>
<p>optional Number of results per page. Default is 10. Example: <code>20</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="GETapi-master-panel-workspace--id--" style="display: none">
            <input type="radio" name="isApi"
                   value="1"
                   data-endpoint="GETapi-master-panel-workspace--id--"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-master-panel-workspace--id--" style="display: none">
            <input type="radio" name="isApi"
                   value="0"
                   data-endpoint="GETapi-master-panel-workspace--id--"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>optional Set true if called from API. Default is true. Example: <code>false</code></p>
            </div>
                </form>

                <h1 id="todos-managemant">Todos Managemant</h1>

    <p>Updates a specific Todo item based on the provided ID and new data.
Requires the <code>id</code>, <code>title</code>, and <code>priority</code> fields in the request.</p>

                                <h2 id="todos-managemant-POSTapi-master-panel-todo">Create a new Todo item.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint creates a new todo item associated with the current workspace and admin.</p>

<span id="example-requests-POSTapi-master-panel-todo">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/todo" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"\\\"Finish report\\\"\",
    \"priority\": \"\\\"High\\\"\",
    \"description\": \"\\\"Complete the monthly sales report.\\\"\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/todo"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "\"Finish report\"",
    "priority": "\"High\"",
    "description": "\"Complete the monthly sales report.\""
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-todo">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Todo created successfully.&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;title&quot;: &quot;Finish report&quot;,
        &quot;priority&quot;: &quot;High&quot;,
        &quot;description&quot;: &quot;Complete the monthly sales report.&quot;,
        &quot;workspace_id&quot;: 5,
        &quot;admin_id&quot;: 3,
        &quot;created_at&quot;: &quot;2025-06-05 10:00:00&quot;,
        &quot;updated_at&quot;: &quot;2025-06-05 10:00:00&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Workspace not found in session.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Validation error.&quot;,
    &quot;errors&quot;: {
        &quot;title&quot;: [
            &quot;The title field is required.&quot;
        ],
        &quot;priority&quot;: [
            &quot;The priority field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row&quot;,
    &quot;message&quot;: &quot;Lead Couldn&#039;t Created.&quot;,
    &quot;line&quot;: 45,
    &quot;file&quot;: &quot;/var/www/html/app/Http/Controllers/TodoController.php&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-todo" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-todo"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-todo"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-todo" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-todo">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-todo" data-method="POST"
      data-path="api/master-panel/todo"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-todo', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-todo"
                    onclick="tryItOut('POSTapi-master-panel-todo');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-todo"
                    onclick="cancelTryOut('POSTapi-master-panel-todo');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-todo"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/todo</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-todo"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-todo"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-master-panel-todo"
               value=""Finish report""
               data-component="body">
    <br>
<p>The title of the todo item. Example: <code>"Finish report"</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>priority</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="priority"                data-endpoint="POSTapi-master-panel-todo"
               value=""High""
               data-component="body">
    <br>
<p>The priority level of the todo. Example: <code>"High"</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-master-panel-todo"
               value=""Complete the monthly sales report.""
               data-component="body">
    <br>
<p>nullable Optional detailed description of the todo. Example: <code>"Complete the monthly sales report."</code></p>
        </div>
        </form>

                    <h2 id="todos-managemant-PUTapi-master-panel-todo--id-">Update an existing Todo</h2>

<p>
</p>



<span id="example-requests-PUTapi-master-panel-todo--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/master-panel/todo/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"id\": 5,
    \"title\": \"Complete Report\",
    \"priority\": \"High\",
    \"description\": \"Submit final version to manager\",
    \"isApi\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/todo/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 5,
    "title": "Complete Report",
    "priority": "High",
    "description": "Submit final version to manager",
    "isApi": true
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-master-panel-todo--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Todo updated successfully.&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 5,
        &quot;data&quot;: {
            &quot;id&quot;: 5,
            &quot;title&quot;: &quot;Complete Report&quot;,
            &quot;priority&quot;: &quot;High&quot;,
            &quot;description&quot;: &quot;Submit final version to manager&quot;,
            &quot;workspace_id&quot;: 2,
            &quot;admin_id&quot;: 1,
            &quot;created_at&quot;: &quot;2025-06-05 14:45:23&quot;,
            &quot;updated_at&quot;: &quot;2025-06-06 10:12:45&quot;
        }
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Todo] 999.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;title&quot;: [
            &quot;The title field is required.&quot;
        ],
        &quot;priority&quot;: [
            &quot;The priority field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Todo couldn&#039;t be updated.&quot;,
    &quot;data&quot;: {
        &quot;error&quot;: &quot;Error message details...&quot;,
        &quot;line&quot;: 45,
        &quot;file&quot;: &quot;/app/Http/Controllers/TodoController.php&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-master-panel-todo--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-master-panel-todo--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-master-panel-todo--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-master-panel-todo--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-master-panel-todo--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-master-panel-todo--id-" data-method="PUT"
      data-path="api/master-panel/todo/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-master-panel-todo--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-master-panel-todo--id-"
                    onclick="tryItOut('PUTapi-master-panel-todo--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-master-panel-todo--id-"
                    onclick="cancelTryOut('PUTapi-master-panel-todo--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-master-panel-todo--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/master-panel/todo/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-master-panel-todo--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-master-panel-todo--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-master-panel-todo--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the todo. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-master-panel-todo--id-"
               value="5"
               data-component="body">
    <br>
<p>The ID of the Todo to update. Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-master-panel-todo--id-"
               value="Complete Report"
               data-component="body">
    <br>
<p>The updated title for the Todo. Example: <code>Complete Report</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>priority</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="priority"                data-endpoint="PUTapi-master-panel-todo--id-"
               value="High"
               data-component="body">
    <br>
<p>The updated priority level. Example: <code>High</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-master-panel-todo--id-"
               value="Submit final version to manager"
               data-component="body">
    <br>
<p>The updated description for the Todo (optional). Example: <code>Submit final version to manager</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-master-panel-todo--id-" style="display: none">
            <input type="radio" name="isApi"
                   value="true"
                   data-endpoint="PUTapi-master-panel-todo--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-master-panel-todo--id-" style="display: none">
            <input type="radio" name="isApi"
                   value="false"
                   data-endpoint="PUTapi-master-panel-todo--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Whether the request is from API. Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="todos-managemant-DELETEapi-master-panel-todo--id-">Delete a Todo</h2>

<p>
</p>

<p>Deletes a specific todo item by ID.</p>

<span id="example-requests-DELETEapi-master-panel-todo--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/todo/42" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/todo/42"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-todo--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Todo deleted successfully.&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 42,
        &quot;title&quot;: &quot;Call client&quot;,
        &quot;priority&quot;: &quot;High&quot;,
        &quot;description&quot;: &quot;Discuss contract terms&quot;,
        &quot;created_at&quot;: &quot;2025-06-05T12:00:00Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-05T14:00:00Z&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Todo not found.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;An error occurred while deleting Todo.&quot;,
    &quot;data&quot;: {
        &quot;error&quot;: &quot;SQLSTATE[23000]: Integrity constraint violation: ...&quot;,
        &quot;line&quot;: 88,
        &quot;file&quot;: &quot;/app/Http/Controllers/TodoController.php&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-todo--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-todo--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-todo--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-todo--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-todo--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-todo--id-" data-method="DELETE"
      data-path="api/master-panel/todo/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-todo--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-todo--id-"
                    onclick="tryItOut('DELETEapi-master-panel-todo--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-todo--id-"
                    onclick="cancelTryOut('DELETEapi-master-panel-todo--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-todo--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/todo/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-todo--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-todo--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-master-panel-todo--id-"
               value="42"
               data-component="url">
    <br>
<p>The ID of the todo to delete. Example: <code>42</code></p>
            </div>
                    </form>

                    <h2 id="todos-managemant-GETapi-master-panel-todo--id--">Display a listing of todos or a specific todo by ID.</h2>

<p>
</p>



<span id="example-requests-GETapi-master-panel-todo--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/todo/consequatur?isApi=&amp;id=17&amp;search=consequatur&amp;sort=consequatur&amp;order=consequatur&amp;limit=17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/todo/consequatur"
);

const params = {
    "isApi": "0",
    "id": "17",
    "search": "consequatur",
    "sort": "consequatur",
    "order": "consequatur",
    "limit": "17",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-todo--id--">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Todos retrieved successfully.&quot;,
    &quot;total&quot;: 25,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;title&quot;: &quot;Sample Todo&quot;,
            &quot;description&quot;: &quot;Description here&quot;,
            &quot;priority&quot;: &quot;High&quot;,
            &quot;is_completed&quot;: false,
            &quot;creator&quot;: {
                &quot;id&quot;: 2,
                &quot;first_name&quot;: &quot;John&quot;,
                &quot;last_name&quot;: &quot;Doe&quot;
            },
            &quot;created_at&quot;: &quot;2025-06-05 10:00:00&quot;,
            &quot;updated_at&quot;: &quot;2025-06-05 10:30:00&quot;
        }
    ]
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Todo not found.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Internal Server Error&quot;,
    &quot;data&quot;: {
        &quot;line&quot;: 123,
        &quot;file&quot;: &quot;/app/Http/Controllers/TodoController.php&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-todo--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-todo--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-todo--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-todo--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-todo--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-todo--id--" data-method="GET"
      data-path="api/master-panel/todo/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-todo--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-todo--id--"
                    onclick="tryItOut('GETapi-master-panel-todo--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-todo--id--"
                    onclick="cancelTryOut('GETapi-master-panel-todo--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-todo--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/todo/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-todo--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-todo--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-master-panel-todo--id--"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the . Example: <code>consequatur</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="GETapi-master-panel-todo--id--" style="display: none">
            <input type="radio" name="isApi"
                   value="1"
                   data-endpoint="GETapi-master-panel-todo--id--"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-master-panel-todo--id--" style="display: none">
            <input type="radio" name="isApi"
                   value="0"
                   data-endpoint="GETapi-master-panel-todo--id--"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Optional. Defaults to true. Set to true to receive API formatted response. Example: <code>false</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-master-panel-todo--id--"
               value="17"
               data-component="query">
    <br>
<p>Optional. If provided, fetch a specific todo by this ID. Example: <code>17</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>search</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="search"                data-endpoint="GETapi-master-panel-todo--id--"
               value="consequatur"
               data-component="query">
    <br>
<p>Optional. Search term to filter todos by title or description. Example: <code>consequatur</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sort</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sort"                data-endpoint="GETapi-master-panel-todo--id--"
               value="consequatur"
               data-component="query">
    <br>
<p>Optional. Column name to sort by. Default: id. Example: <code>consequatur</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="order"                data-endpoint="GETapi-master-panel-todo--id--"
               value="consequatur"
               data-component="query">
    <br>
<p>Optional. Sort order: asc or desc. Default: desc. Example: <code>consequatur</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>limit</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="limit"                data-endpoint="GETapi-master-panel-todo--id--"
               value="17"
               data-component="query">
    <br>
<p>Optional. Number of items per page for pagination. Default: 10. Example: <code>17</code></p>
            </div>
                </form>

                <h1 id="meeting-managemant">Meeting Managemant</h1>

    

                                <h2 id="meeting-managemant-POSTapi-master-panel-meeting">Create a new meeting</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint creates a new meeting within the current workspace. It validates the meeting date/time, ensures the creator is part of the participant list, and sends notifications to all participants.</p>

<span id="example-requests-POSTapi-master-panel-meeting">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/meeting" \
    --header "workspace-id: integer required The ID of the workspace in which the meeting is to be created." \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"Project Kickoff\",
    \"start_date\": \"2025-06-05\",
    \"end_date\": \"2025-06-05\",
    \"start_time\": \"10:00\",
    \"end_time\": \"11:30\",
    \"user_ids\": [
        1,
        2,
        3
    ],
    \"client_ids\": [
        5,
        6
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/meeting"
);

const headers = {
    "workspace-id": "integer required The ID of the workspace in which the meeting is to be created.",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "Project Kickoff",
    "start_date": "2025-06-05",
    "end_date": "2025-06-05",
    "start_time": "10:00",
    "end_time": "11:30",
    "user_ids": [
        1,
        2,
        3
    ],
    "client_ids": [
        5,
        6
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-meeting">
            <blockquote>
            <p>Example response (200, Meeting successfully created):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;error&quot;: false,
  &quot;message&quot;: &quot;Meeting created successfully.&quot;,
  &quot;data&quot;: {
    &quot;id&quot;: 12,
    &quot;data&quot;: {
      &quot;id&quot;: 12,
      &quot;title&quot;: &quot;Project Kickoff&quot;,
      &quot;start_date_time&quot;: &quot;2025-06-05 10:00:00&quot;,
      &quot;end_date_time&quot;: &quot;2025-06-05 11:30:00&quot;,
      &quot;workspace_id&quot;: 3,
      &quot;admin_id&quot;: 1,
      ...
    }
  }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400, Missing workspace or user context):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Missing workspace or user context.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (422, Validation error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Validation failed&quot;,
    &quot;data&quot;: {
        &quot;title&quot;: [
            &quot;The title field is required.&quot;
        ],
        &quot;start_date&quot;: [
            &quot;The start date is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500, Unexpected server error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Meeting couldn&#039;t be created.&quot;,
    &quot;data&quot;: {
        &quot;error&quot;: &quot;SQLSTATE[...]: Some database error&quot;,
        &quot;line&quot;: 102,
        &quot;file&quot;: &quot;app/Http/Controllers/MeetingController.php&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-meeting" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-meeting"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-meeting"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-meeting" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-meeting">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-meeting" data-method="POST"
      data-path="api/master-panel/meeting"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-meeting', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-meeting"
                    onclick="tryItOut('POSTapi-master-panel-meeting');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-meeting"
                    onclick="cancelTryOut('POSTapi-master-panel-meeting');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-meeting"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/meeting</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>workspace-id</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="workspace-id"                data-endpoint="POSTapi-master-panel-meeting"
               value="integer required The ID of the workspace in which the meeting is to be created."
               data-component="header">
    <br>
<p>Example: <code>integer required The ID of the workspace in which the meeting is to be created.</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-meeting"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-meeting"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-master-panel-meeting"
               value="Project Kickoff"
               data-component="body">
    <br>
<p>The title of the meeting. Example: <code>Project Kickoff</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="POSTapi-master-panel-meeting"
               value="2025-06-05"
               data-component="body">
    <br>
<p>The start date of the meeting (format: Y-m-d). Example: <code>2025-06-05</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_date"                data-endpoint="POSTapi-master-panel-meeting"
               value="2025-06-05"
               data-component="body">
    <br>
<p>The end date of the meeting (format: Y-m-d). Must be equal to or after start_date. Example: <code>2025-06-05</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_time"                data-endpoint="POSTapi-master-panel-meeting"
               value="10:00"
               data-component="body">
    <br>
<p>The start time in 24-hour format (HH:mm). Example: <code>10:00</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_time"                data-endpoint="POSTapi-master-panel-meeting"
               value="11:30"
               data-component="body">
    <br>
<p>The end time in 24-hour format (HH:mm). Must be after start_time if on the same day. Example: <code>11:30</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="user_ids[0]"                data-endpoint="POSTapi-master-panel-meeting"
               data-component="body">
        <input type="text" style="display: none"
               name="user_ids[1]"                data-endpoint="POSTapi-master-panel-meeting"
               data-component="body">
    <br>
<p>Optional array of internal user IDs to be added as participants.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="client_ids[0]"                data-endpoint="POSTapi-master-panel-meeting"
               data-component="body">
        <input type="text" style="display: none"
               name="client_ids[1]"                data-endpoint="POSTapi-master-panel-meeting"
               data-component="body">
    <br>
<p>Optional array of client user IDs to be added as participants.</p>
        </div>
        </form>

                    <h2 id="meeting-managemant-GETapi-master-panel-meeting--id--">List Meetings</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Retrieve a list of all meetings or a single meeting by ID, with support for search, filters, sort, and pagination.</p>

<span id="example-requests-GETapi-master-panel-meeting--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/meeting/5?search=team+sync&amp;sort=start_date_time&amp;order=ASC&amp;limit=10&amp;status=ongoing&amp;user_id=2&amp;client_id=8&amp;start_date_from=2025-06-01&amp;start_date_to=2025-06-30&amp;end_date_from=2025-06-01&amp;end_date_to=2025-06-30&amp;isApi=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/meeting/5"
);

const params = {
    "search": "team sync",
    "sort": "start_date_time",
    "order": "ASC",
    "limit": "10",
    "status": "ongoing",
    "user_id": "2",
    "client_id": "8",
    "start_date_from": "2025-06-01",
    "start_date_to": "2025-06-30",
    "end_date_from": "2025-06-01",
    "end_date_to": "2025-06-30",
    "isApi": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-meeting--id--">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Meetings retrieved successfully.&quot;,
    &quot;data&quot;: {
        &quot;total&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;Client Update Meeting&quot;,
                &quot;start_date_time&quot;: &quot;2025-06-10 10:00:00&quot;,
                &quot;end_date_time&quot;: &quot;2025-06-10 11:00:00&quot;,
                &quot;users&quot;: &quot;&lt;ul&gt;...&lt;/ul&gt;&quot;,
                &quot;clients&quot;: &quot;&lt;ul&gt;...&lt;/ul&gt;&quot;,
                &quot;status&quot;: &quot;Ongoing&quot;,
                &quot;created_at&quot;: &quot;2025-06-01 09:30:00&quot;,
                &quot;updated_at&quot;: &quot;2025-06-01 09:45:00&quot;,
                &quot;actions&quot;: &quot;&lt;a&gt;...&lt;/a&gt;&quot;
            }
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Missing workspace or user context.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Meeting not found.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Validation failed.&quot;,
    &quot;data&quot;: {
        &quot;user_id&quot;: [
            &quot;The selected user_id is invalid.&quot;
        ],
        &quot;client_id&quot;: [
            &quot;The selected client_id is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;An error occurred while retrieving meetings.&quot;,
    &quot;data&quot;: {
        &quot;error&quot;: &quot;SQLSTATE[HY000]: General error...&quot;,
        &quot;file&quot;: &quot;/app/Http/Controllers/MeetingsController.php&quot;,
        &quot;line&quot;: 75
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-meeting--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-meeting--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-meeting--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-meeting--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-meeting--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-meeting--id--" data-method="GET"
      data-path="api/master-panel/meeting/{id?}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-meeting--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-meeting--id--"
                    onclick="tryItOut('GETapi-master-panel-meeting--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-meeting--id--"
                    onclick="cancelTryOut('GETapi-master-panel-meeting--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-meeting--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/meeting/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-meeting--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-meeting--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-master-panel-meeting--id--"
               value="5"
               data-component="url">
    <br>
<p>Optional. The ID of the meeting to retrieve. Example: <code>5</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>search</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="search"                data-endpoint="GETapi-master-panel-meeting--id--"
               value="team sync"
               data-component="query">
    <br>
<p>Optional. Search by meeting title or ID. Example: <code>team sync</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sort</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sort"                data-endpoint="GETapi-master-panel-meeting--id--"
               value="start_date_time"
               data-component="query">
    <br>
<p>Optional. Field to sort by. Default is id. Example: <code>start_date_time</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="order"                data-endpoint="GETapi-master-panel-meeting--id--"
               value="ASC"
               data-component="query">
    <br>
<p>Optional. Sort order (ASC or DESC). Default is DESC. Example: <code>ASC</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>limit</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="limit"                data-endpoint="GETapi-master-panel-meeting--id--"
               value="10"
               data-component="query">
    <br>
<p>Optional. Number of results per page. Example: <code>10</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="GETapi-master-panel-meeting--id--"
               value="ongoing"
               data-component="query">
    <br>
<p>Optional. Filter by meeting status. Options: ongoing, yet_to_start, ended. Example: <code>ongoing</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="GETapi-master-panel-meeting--id--"
               value="2"
               data-component="query">
    <br>
<p>Optional. Filter meetings assigned to a specific user. Example: <code>2</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>client_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="client_id"                data-endpoint="GETapi-master-panel-meeting--id--"
               value="8"
               data-component="query">
    <br>
<p>Optional. Filter meetings assigned to a specific client. Example: <code>8</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>start_date_from</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="start_date_from"                data-endpoint="GETapi-master-panel-meeting--id--"
               value="2025-06-01"
               data-component="query">
    <br>
<p>date Optional. Start date filter from (Y-m-d). Example: <code>2025-06-01</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>start_date_to</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="start_date_to"                data-endpoint="GETapi-master-panel-meeting--id--"
               value="2025-06-30"
               data-component="query">
    <br>
<p>date Optional. Start date filter to (Y-m-d). Example: <code>2025-06-30</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>end_date_from</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="end_date_from"                data-endpoint="GETapi-master-panel-meeting--id--"
               value="2025-06-01"
               data-component="query">
    <br>
<p>date Optional. End date filter from (Y-m-d). Example: <code>2025-06-01</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>end_date_to</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="end_date_to"                data-endpoint="GETapi-master-panel-meeting--id--"
               value="2025-06-30"
               data-component="query">
    <br>
<p>date Optional. End date filter to (Y-m-d). Example: <code>2025-06-30</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="GETapi-master-panel-meeting--id--" style="display: none">
            <input type="radio" name="isApi"
                   value="1"
                   data-endpoint="GETapi-master-panel-meeting--id--"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-master-panel-meeting--id--" style="display: none">
            <input type="radio" name="isApi"
                   value="0"
                   data-endpoint="GETapi-master-panel-meeting--id--"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Optional. Default is true. Used to enable API-formatted responses. Example: <code>true</code></p>
            </div>
                </form>

                    <h2 id="meeting-managemant-PUTapi-master-panel-meeting--id-">Update a Meeting</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Update the details of an existing meeting. Also supports assigning users and clients to the meeting, and notifies newly assigned participants.</p>

<span id="example-requests-PUTapi-master-panel-meeting--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/master-panel/meeting/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"Project Planning\",
    \"start_date\": \"2025-06-08\",
    \"end_date\": \"2025-06-08\",
    \"start_time\": \"10:00:00\",
    \"end_time\": \"11:30:00\",
    \"id\": 7,
    \"user_ids\": [
        1,
        4,
        5
    ],
    \"client_ids\": [
        2,
        8
    ],
    \"isApi\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/meeting/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "Project Planning",
    "start_date": "2025-06-08",
    "end_date": "2025-06-08",
    "start_time": "10:00:00",
    "end_time": "11:30:00",
    "id": 7,
    "user_ids": [
        1,
        4,
        5
    ],
    "client_ids": [
        2,
        8
    ],
    "isApi": true
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-master-panel-meeting--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;status&quot;: false,
  &quot;message&quot;: &quot;meeting updated successfully.&quot;,
  &quot;data&quot;: {
    &quot;id&quot;: 7,
    &quot;data&quot;: {
      &quot;id&quot;: 7,
      &quot;title&quot;: &quot;Project Planning&quot;,
      &quot;start_date_time&quot;: &quot;2025-06-08 10:00:00&quot;,
      &quot;end_date_time&quot;: &quot;2025-06-08 11:30:00&quot;,
      &quot;users&quot;: [...],
      &quot;clients&quot;: [...],
      ...
    }
  }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Meeting not found.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Validation failed.&quot;,
    &quot;data&quot;: {
        &quot;title&quot;: [
            &quot;The title field is required.&quot;
        ],
        &quot;start_date&quot;: [
            &quot;The start date field is required.&quot;
        ],
        &quot;end_date&quot;: [
            &quot;The end date must be after or equal to start date.&quot;
        ],
        &quot;end_time&quot;: [
            &quot;End time must be after start time on the same day.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;An error occurred while updating the meeting.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-master-panel-meeting--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-master-panel-meeting--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-master-panel-meeting--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-master-panel-meeting--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-master-panel-meeting--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-master-panel-meeting--id-" data-method="PUT"
      data-path="api/master-panel/meeting/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-master-panel-meeting--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-master-panel-meeting--id-"
                    onclick="tryItOut('PUTapi-master-panel-meeting--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-master-panel-meeting--id-"
                    onclick="cancelTryOut('PUTapi-master-panel-meeting--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-master-panel-meeting--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/master-panel/meeting/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-master-panel-meeting--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-master-panel-meeting--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-master-panel-meeting--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the meeting. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-master-panel-meeting--id-"
               value="Project Planning"
               data-component="body">
    <br>
<p>The title of the meeting. Example: <code>Project Planning</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="PUTapi-master-panel-meeting--id-"
               value="2025-06-08"
               data-component="body">
    <br>
<p>Start date of the meeting (Y-m-d). Must be before or equal to end_date. Example: <code>2025-06-08</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_date"                data-endpoint="PUTapi-master-panel-meeting--id-"
               value="2025-06-08"
               data-component="body">
    <br>
<p>End date of the meeting (Y-m-d). Must be after or equal to start_date. Example: <code>2025-06-08</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_time"                data-endpoint="PUTapi-master-panel-meeting--id-"
               value="10:00:00"
               data-component="body">
    <br>
<p>Start time in 24-hour format (H:i:s). Example: <code>10:00:00</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_time"                data-endpoint="PUTapi-master-panel-meeting--id-"
               value="11:30:00"
               data-component="body">
    <br>
<p>End time in 24-hour format (H:i:s). Must be after start_time if dates are the same. Example: <code>11:30:00</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-master-panel-meeting--id-"
               value="7"
               data-component="body">
    <br>
<p>The ID of the meeting to update. Example: <code>7</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="user_ids[0]"                data-endpoint="PUTapi-master-panel-meeting--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="user_ids[1]"                data-endpoint="PUTapi-master-panel-meeting--id-"
               data-component="body">
    <br>
<p>Optional. An array of user IDs to assign to the meeting.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>client_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="client_ids[0]"                data-endpoint="PUTapi-master-panel-meeting--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="client_ids[1]"                data-endpoint="PUTapi-master-panel-meeting--id-"
               data-component="body">
    <br>
<p>Optional. An array of client IDs to assign to the meeting.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-master-panel-meeting--id-" style="display: none">
            <input type="radio" name="isApi"
                   value="true"
                   data-endpoint="PUTapi-master-panel-meeting--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-master-panel-meeting--id-" style="display: none">
            <input type="radio" name="isApi"
                   value="false"
                   data-endpoint="PUTapi-master-panel-meeting--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Optional. Use true to get a standardized API response. Default is false. Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="meeting-managemant-DELETEapi-master-panel-meeting--id-">Delete a Meeting</h2>

<p>
</p>

<p>This endpoint allows you to delete a meeting by its ID. Only users with proper permissions can delete meetings.</p>

<span id="example-requests-DELETEapi-master-panel-meeting--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/meeting/15" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/meeting/15"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-meeting--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Meeting deleted successfully.&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 15,
        &quot;data&quot;: []
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Meeting not found.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;An error occurred while deleting the meeting.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-meeting--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-meeting--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-meeting--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-meeting--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-meeting--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-meeting--id-" data-method="DELETE"
      data-path="api/master-panel/meeting/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-meeting--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-meeting--id-"
                    onclick="tryItOut('DELETEapi-master-panel-meeting--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-meeting--id-"
                    onclick="cancelTryOut('DELETEapi-master-panel-meeting--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-meeting--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/meeting/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-meeting--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-meeting--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-master-panel-meeting--id-"
               value="15"
               data-component="url">
    <br>
<p>The ID of the meeting to delete. Example: <code>15</code></p>
            </div>
                    </form>

                <h1 id="note-managemant">note Managemant</h1>

    <p>This endpoint allows you to delete a note by its ID.
It performs a lookup for the note, deletes it using the DeletionService,
and returns a formatted API response.</p>

                                <h2 id="note-managemant-POSTapi-master-panel-note">Create a new note.</h2>

<p>
</p>

<p>This endpoint allows you to create a new note of type <code>text</code> or <code>drawing</code>. If the note type is <code>drawing</code>,
you must provide valid <code>drawing_data</code> in base64-encoded SVG format. The note is associated with the current
workspace and the authenticated user (either client or user).</p>

<span id="example-requests-POSTapi-master-panel-note">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/note" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"note_type\": \"text\",
    \"title\": \"Project Kickoff Notes\",
    \"color\": \"#ffcc00\",
    \"description\": \"Discussed project milestones and timelines.\",
    \"drawing_data\": \"PHN2ZyB...\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/note"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "note_type": "text",
    "title": "Project Kickoff Notes",
    "color": "#ffcc00",
    "description": "Discussed project milestones and timelines.",
    "drawing_data": "PHN2ZyB..."
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-note">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
  &quot;error&quot;: false,
  &quot;message&quot;: &quot;Note created successfully.&quot;,
  &quot;data&quot;: {
    &quot;id&quot;: 12,
    &quot;data&quot;: {
      &quot;id&quot;: 12,
      &quot;title&quot;: &quot;Project Kickoff Notes&quot;,
      &quot;note_type&quot;: &quot;text&quot;,
      &quot;color&quot;: &quot;#ffcc00&quot;,
      &quot;description&quot;: &quot;Discussed project milestones and timelines.&quot;,
      &quot;creator_id&quot;: &quot;u_1&quot;,
      &quot;workspace_id&quot;: 3,
      ...
    }
  }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;note_type&quot;: [
            &quot;The note type field is required.&quot;
        ],
        &quot;title&quot;: [
            &quot;The title field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;An error occurred while creating the note.&quot;,
    &quot;data&quot;: {
        &quot;error&quot;: &quot;Exception message here&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-note" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-note"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-note"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-note" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-note">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-note" data-method="POST"
      data-path="api/master-panel/note"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-note', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-note"
                    onclick="tryItOut('POSTapi-master-panel-note');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-note"
                    onclick="cancelTryOut('POSTapi-master-panel-note');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-note"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/note</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-note"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-note"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>note_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="note_type"                data-endpoint="POSTapi-master-panel-note"
               value="text"
               data-component="body">
    <br>
<p>The type of note. Must be either <code>text</code> or <code>drawing</code>. Example: <code>text</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-master-panel-note"
               value="Project Kickoff Notes"
               data-component="body">
    <br>
<p>The title of the note. Example: <code>Project Kickoff Notes</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color"                data-endpoint="POSTapi-master-panel-note"
               value="#ffcc00"
               data-component="body">
    <br>
<p>Color code or name for the note. Example: <code>#ffcc00</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-master-panel-note"
               value="Discussed project milestones and timelines."
               data-component="body">
    <br>
<p>The description or body content of the note (required for text notes). Example: <code>Discussed project milestones and timelines.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>drawing_data</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="drawing_data"                data-endpoint="POSTapi-master-panel-note"
               value="PHN2ZyB..."
               data-component="body">
    <br>
<p>The base64-encoded SVG content (required if note_type is <code>drawing</code>). Example: <code>PHN2ZyB...</code></p>
        </div>
        </form>

                    <h2 id="note-managemant-PUTapi-master-panel-note--id-">Update an existing note.</h2>

<p>
</p>

<p>Updates the note identified by <code>id</code> with the provided data.
Supports notes of type <code>text</code> or <code>drawing</code>. For <code>drawing</code> type,
the <code>drawing_data</code> must be a base64-encoded string, which will be decoded.</p>

<span id="example-requests-PUTapi-master-panel-note--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/master-panel/note/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"id\": 12,
    \"note_type\": \"text\",
    \"title\": \"Meeting notes\",
    \"color\": \"#FF5733\",
    \"description\": \"Detailed notes from the meeting\",
    \"drawing_data\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/note/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 12,
    "note_type": "text",
    "title": "Meeting notes",
    "color": "#FF5733",
    "description": "Detailed notes from the meeting",
    "drawing_data": "consequatur"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-master-panel-note--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
   &quot;error&quot;: false,
   &quot;message&quot;: &quot;Note updated successfully.&quot;,
   &quot;data&quot;: {
      &quot;id&quot;: 12,
      &quot;data&quot;: {
         &quot;id&quot;: 12,
         &quot;note_type&quot;: &quot;text&quot;,
         &quot;title&quot;: &quot;Meeting notes&quot;,
         &quot;color&quot;: &quot;#FF5733&quot;,
         &quot;description&quot;: &quot;Detailed notes from the meeting&quot;,
         &quot;drawing_data&quot;: null,
         // ... other formatted note fields
      }
   }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;title&quot;: [
            &quot;The title field is required.&quot;
        ],
        &quot;note_type&quot;: [
            &quot;The selected note type is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;Detailed error message here&quot;,
    &quot;message&quot;: &quot;An error occurred while updating the note.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-master-panel-note--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-master-panel-note--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-master-panel-note--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-master-panel-note--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-master-panel-note--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-master-panel-note--id-" data-method="PUT"
      data-path="api/master-panel/note/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-master-panel-note--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-master-panel-note--id-"
                    onclick="tryItOut('PUTapi-master-panel-note--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-master-panel-note--id-"
                    onclick="cancelTryOut('PUTapi-master-panel-note--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-master-panel-note--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/master-panel/note/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-master-panel-note--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-master-panel-note--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-master-panel-note--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the note. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-master-panel-note--id-"
               value="12"
               data-component="body">
    <br>
<p>The ID of the note to update. Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>note_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="note_type"                data-endpoint="PUTapi-master-panel-note--id-"
               value="text"
               data-component="body">
    <br>
<p>The type of note, either <code>text</code> or <code>drawing</code>. Example: <code>text</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-master-panel-note--id-"
               value="Meeting notes"
               data-component="body">
    <br>
<p>The title of the note. Example: <code>Meeting notes</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color"                data-endpoint="PUTapi-master-panel-note--id-"
               value="#FF5733"
               data-component="body">
    <br>
<p>The color associated with the note. Example: <code>#FF5733</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-master-panel-note--id-"
               value="Detailed notes from the meeting"
               data-component="body">
    <br>
<p>nullable Optional description for the note. Example: <code>Detailed notes from the meeting</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>drawing_data</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="drawing_data"                data-endpoint="PUTapi-master-panel-note--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>required_if:note_type,drawing Base64-encoded SVG data for drawing notes. Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="note-managemant-DELETEapi-master-panel-note--id-">Delete a Note</h2>

<p>
</p>



<span id="example-requests-DELETEapi-master-panel-note--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/note/7" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/note/7"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-note--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Note deleted successfully.&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 7,
        &quot;title&quot;: &quot;Project Kickoff Notes&quot;,
        &quot;content&quot;: &quot;Initial project meeting details...&quot;,
        &quot;user_id&quot;: 3,
        &quot;workspace_id&quot;: 2,
        &quot;created_at&quot;: &quot;2024-05-24T08:12:54.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2024-06-01T10:20:41.000000Z&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Note] 99&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Something went wrong while deleting the note.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-note--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-note--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-note--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-note--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-note--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-note--id-" data-method="DELETE"
      data-path="api/master-panel/note/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-note--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-note--id-"
                    onclick="tryItOut('DELETEapi-master-panel-note--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-note--id-"
                    onclick="cancelTryOut('DELETEapi-master-panel-note--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-note--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/note/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-note--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-note--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-master-panel-note--id-"
               value="7"
               data-component="url">
    <br>
<p>The ID of the note to delete. Example: <code>7</code></p>
            </div>
                    </form>

                    <h2 id="note-managemant-GETapi-master-panel-note--id--">Get All Notes or a Specific Note

This endpoint retrieves either:
- A list of all notes (if no ID is provided), or
- A single note by its ID (if provided).

Notes are filtered by the current workspace and admin context.</h2>

<p>
</p>



<span id="example-requests-GETapi-master-panel-note--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/note/3" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/note/3"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-note--id--">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Notes retrieved successfully.&quot;,
    &quot;data&quot;: {
        &quot;total&quot;: 2,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;title&quot;: &quot;Sprint Planning&quot;,
                &quot;note_type&quot;: &quot;text&quot;,
                &quot;color&quot;: &quot;#ffffff&quot;,
                &quot;workspace_id&quot;: 1,
                &quot;admin_id&quot;: 1,
                &quot;creator_id&quot;: &quot;u_3&quot;,
                &quot;created_at&quot;: &quot;2025-06-01T12:00:00.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-01T12:30:00.000000Z&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;UI Wireframe&quot;,
                &quot;note_type&quot;: &quot;drawing&quot;,
                &quot;color&quot;: &quot;#000000&quot;,
                &quot;workspace_id&quot;: 1,
                &quot;admin_id&quot;: 1,
                &quot;creator_id&quot;: &quot;u_3&quot;,
                &quot;created_at&quot;: &quot;2025-06-02T08:45:00.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-02T09:15:00.000000Z&quot;
            }
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Note retrieved successfully.&quot;,
    &quot;data&quot;: {
        &quot;total&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 3,
                &quot;title&quot;: &quot;Design Plan&quot;,
                &quot;note_type&quot;: &quot;drawing&quot;,
                &quot;color&quot;: &quot;#ffdd00&quot;,
                &quot;workspace_id&quot;: 1,
                &quot;admin_id&quot;: 1,
                &quot;creator_id&quot;: &quot;u_5&quot;,
                &quot;created_at&quot;: &quot;2025-06-03T10:00:00.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-03T10:30:00.000000Z&quot;
            }
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Note not found.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Failed to retrieve notes.&quot;,
    &quot;data&quot;: {
        &quot;error&quot;: &quot;SQLSTATE[42S02]: Base table or view not found: 1146 Table &#039;notes&#039; doesn&#039;t exist&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-note--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-note--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-note--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-note--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-note--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-note--id--" data-method="GET"
      data-path="api/master-panel/note/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-note--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-note--id--"
                    onclick="tryItOut('GETapi-master-panel-note--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-note--id--"
                    onclick="cancelTryOut('GETapi-master-panel-note--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-note--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/note/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-note--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-note--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-master-panel-note--id--"
               value="3"
               data-component="url">
    <br>
<p>optional The ID of the note to retrieve. Example: <code>3</code></p>
            </div>
                    </form>

                <h1 id="leaverequest-managemant">leaverequest Managemant</h1>

    <p>This endpoint allows a user, admin, or leave editor to create a leave request.</p>

                                <h2 id="leaverequest-managemant-POSTapi-master-panel-leaverequest">Create a Leave Request</h2>

<p>
</p>



<span id="example-requests-POSTapi-master-panel-leaverequest">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/master-panel/leaverequest" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"reason\": \"Family function\",
    \"from_date\": \"2025-06-10\",
    \"to_date\": \"2025-06-12\",
    \"partialLeave\": true,
    \"from_time\": \"10:00\",
    \"to_time\": \"14:00\",
    \"status\": \"pending\",
    \"leaveVisibleToAll\": true,
    \"visible_to_ids\": [
        3,
        5,
        7
    ],
    \"user_id\": 9,
    \"isApi\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/leaverequest"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "reason": "Family function",
    "from_date": "2025-06-10",
    "to_date": "2025-06-12",
    "partialLeave": true,
    "from_time": "10:00",
    "to_time": "14:00",
    "status": "pending",
    "leaveVisibleToAll": true,
    "visible_to_ids": [
        3,
        5,
        7
    ],
    "user_id": 9,
    "isApi": true
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-master-panel-leaverequest">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
 &quot;error&quot;: false,
 &quot;message&quot;: &quot;Leave request created successfully.&quot;,
 &quot;id&quot;: 13,
 &quot;type&quot;: &quot;leave_request&quot;,
 &quot;data&quot;: {
   &quot;id&quot;: 13,
   &quot;user_id&quot;: 9,
   &quot;reason&quot;: &quot;Family function&quot;,
   &quot;from_date&quot;: &quot;2025-06-10&quot;,
   &quot;to_date&quot;: &quot;2025-06-12&quot;,
   &quot;from_time&quot;: null,
   &quot;to_time&quot;: null,
   &quot;status&quot;: &quot;pending&quot;,
   &quot;visible_to_all&quot;: true,
   ...
 }
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;reason&quot;: [
            &quot;The reason field is required.&quot;
        ],
        &quot;from_date&quot;: [
            &quot;The from date field is required.&quot;
        ],
        &quot;to_date&quot;: [
            &quot;The to date field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: &quot;Exception message&quot;,
    &quot;message&quot;: &quot;leave request culd not created&quot;,
    &quot;line&quot;: 125,
    &quot;file&quot;: &quot;app/Http/Controllers/LeaveRequestController.php&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-master-panel-leaverequest" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-master-panel-leaverequest"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-master-panel-leaverequest"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-master-panel-leaverequest" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-master-panel-leaverequest">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-master-panel-leaverequest" data-method="POST"
      data-path="api/master-panel/leaverequest"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-master-panel-leaverequest', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-master-panel-leaverequest"
                    onclick="tryItOut('POSTapi-master-panel-leaverequest');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-master-panel-leaverequest"
                    onclick="cancelTryOut('POSTapi-master-panel-leaverequest');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-master-panel-leaverequest"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/master-panel/leaverequest</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-master-panel-leaverequest"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-master-panel-leaverequest"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reason</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reason"                data-endpoint="POSTapi-master-panel-leaverequest"
               value="Family function"
               data-component="body">
    <br>
<p>The reason for the leave. Example: <code>Family function</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>from_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="from_date"                data-endpoint="POSTapi-master-panel-leaverequest"
               value="2025-06-10"
               data-component="body">
    <br>
<p>The start date of the leave in the format Y-m-d. Example: <code>2025-06-10</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>to_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="to_date"                data-endpoint="POSTapi-master-panel-leaverequest"
               value="2025-06-12"
               data-component="body">
    <br>
<p>The end date of the leave in the format Y-m-d. If partialLeave is on, this must match from_date. Example: <code>2025-06-12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>partialLeave</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-master-panel-leaverequest" style="display: none">
            <input type="radio" name="partialLeave"
                   value="true"
                   data-endpoint="POSTapi-master-panel-leaverequest"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-master-panel-leaverequest" style="display: none">
            <input type="radio" name="partialLeave"
                   value="false"
                   data-endpoint="POSTapi-master-panel-leaverequest"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>optional If set to &quot;on&quot;, indicates a partial day leave. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>from_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="from_time"                data-endpoint="POSTapi-master-panel-leaverequest"
               value="10:00"
               data-component="body">
    <br>
<p>required_if:partialLeave,on The start time for a partial leave (24-hour format). Example: <code>10:00</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>to_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="to_time"                data-endpoint="POSTapi-master-panel-leaverequest"
               value="14:00"
               data-component="body">
    <br>
<p>required_if:partialLeave,on The end time for a partial leave (24-hour format). Example: <code>14:00</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-master-panel-leaverequest"
               value="pending"
               data-component="body">
    <br>
<p>optional Only admins or leave editors can set status to 'approved' or 'rejected'. Default is 'pending'. Example: <code>pending</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>leaveVisibleToAll</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-master-panel-leaverequest" style="display: none">
            <input type="radio" name="leaveVisibleToAll"
                   value="true"
                   data-endpoint="POSTapi-master-panel-leaverequest"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-master-panel-leaverequest" style="display: none">
            <input type="radio" name="leaveVisibleToAll"
                   value="false"
                   data-endpoint="POSTapi-master-panel-leaverequest"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>optional If set to &quot;on&quot;, the leave is visible to all workspace users. Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>visible_to_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="visible_to_ids[0]"                data-endpoint="POSTapi-master-panel-leaverequest"
               data-component="body">
        <input type="text" style="display: none"
               name="visible_to_ids[1]"                data-endpoint="POSTapi-master-panel-leaverequest"
               data-component="body">
    <br>
<p>optional Required if leaveVisibleToAll is not set. An array of user IDs who can view the leave.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="POSTapi-master-panel-leaverequest"
               value="9"
               data-component="body">
    <br>
<p>optional Only admins or leave editors can create leave requests on behalf of another user. Example: <code>9</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-master-panel-leaverequest" style="display: none">
            <input type="radio" name="isApi"
                   value="true"
                   data-endpoint="POSTapi-master-panel-leaverequest"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-master-panel-leaverequest" style="display: none">
            <input type="radio" name="isApi"
                   value="false"
                   data-endpoint="POSTapi-master-panel-leaverequest"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>optional Indicates if this is an API request. Defaults to true. Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="leaverequest-managemant-GETapi-master-panel-leaverequest--id--">List Leave Requests (all or by ID)

This API returns either a paginated list of leave requests based on filters or a single leave request if an ID is provided.

Requires authentication. Workspace must be set via header `workspace-id`.</h2>

<p>
</p>



<span id="example-requests-GETapi-master-panel-leaverequest--id--">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/master-panel/leaverequest/17?isApi=&amp;search=consequatur&amp;sort=consequatur&amp;order=consequatur&amp;user_ids[]=consequatur&amp;action_by_ids[]=consequatur&amp;types[]=consequatur&amp;statuses[]=consequatur&amp;start_date_from=consequatur&amp;start_date_to=consequatur&amp;end_date_from=consequatur&amp;end_date_to=consequatur&amp;limit=17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/leaverequest/17"
);

const params = {
    "isApi": "0",
    "search": "consequatur",
    "sort": "consequatur",
    "order": "consequatur",
    "user_ids[0]": "consequatur",
    "action_by_ids[0]": "consequatur",
    "types[0]": "consequatur",
    "statuses[0]": "consequatur",
    "start_date_from": "consequatur",
    "start_date_to": "consequatur",
    "end_date_from": "consequatur",
    "end_date_to": "consequatur",
    "limit": "17",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-master-panel-leaverequest--id--">
            <blockquote>
            <p>Example response (200, Single Leave Request Found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Leave request retrieved successfully.&quot;,
    &quot;data&quot;: {
        &quot;total&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 14,
                &quot;user_name&quot;: &quot;John Doe&quot;,
                &quot;action_by&quot;: &quot;Jane Smith&quot;,
                &quot;from_date&quot;: &quot;Mon, 2024-06-01&quot;,
                &quot;to_date&quot;: &quot;Tue, 2024-06-02&quot;,
                &quot;type&quot;: &quot;Full&quot;,
                &quot;duration&quot;: &quot;2 days&quot;,
                &quot;reason&quot;: &quot;Medical leave&quot;,
                &quot;status&quot;: &quot;&lt;span class=&#039;badge bg-warning&#039;&gt;Pending&lt;/span&gt;&quot;,
                &quot;visible_to&quot;: &quot;All&quot;,
                &quot;created_at&quot;: &quot;2024-05-15 10:30 AM&quot;,
                &quot;updated_at&quot;: &quot;2024-05-16 09:20 AM&quot;,
                &quot;actions&quot;: &quot;&lt;a href=...&gt;Edit&lt;/a&gt; &lt;button&gt;Delete&lt;/button&gt;&quot;
            }
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (200, List of Leave Requests):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Leave requests retrieved successfully.&quot;,
    &quot;data&quot;: {
        &quot;total&quot;: 5,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;user_name&quot;: &quot;John Doe&quot;,
                &quot;action_by&quot;: &quot;Jane Smith&quot;,
                &quot;from_date&quot;: &quot;Mon, 2024-06-01&quot;,
                &quot;to_date&quot;: &quot;Tue, 2024-06-02&quot;,
                &quot;type&quot;: &quot;Full&quot;,
                &quot;duration&quot;: &quot;2 days&quot;,
                &quot;reason&quot;: &quot;Annual Leave&quot;,
                &quot;status&quot;: &quot;&lt;span class=&#039;badge bg-success&#039;&gt;Approved&lt;/span&gt;&quot;,
                &quot;visible_to&quot;: &quot;All&quot;,
                &quot;created_at&quot;: &quot;2024-05-01 08:00 AM&quot;,
                &quot;updated_at&quot;: &quot;2024-05-02 09:00 AM&quot;,
                &quot;actions&quot;: &quot;&lt;a href=...&gt;Edit&lt;/a&gt; &lt;button&gt;Delete&lt;/button&gt;&quot;
            }
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Leave request not found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Unable to retrieve leave requests.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (500, Server error or internal exception):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Unable to retrieve leave requests.&quot;,
    &quot;data&quot;: [],
    &quot;error&quot;: &quot;Call to undefined relationship [actionBy] on model [App\\Models\\LeaveRequest].&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-master-panel-leaverequest--id--" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-master-panel-leaverequest--id--"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-master-panel-leaverequest--id--"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-master-panel-leaverequest--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-master-panel-leaverequest--id--">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-master-panel-leaverequest--id--" data-method="GET"
      data-path="api/master-panel/leaverequest/{id?}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-master-panel-leaverequest--id--', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-master-panel-leaverequest--id--"
                    onclick="tryItOut('GETapi-master-panel-leaverequest--id--');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-master-panel-leaverequest--id--"
                    onclick="cancelTryOut('GETapi-master-panel-leaverequest--id--');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-master-panel-leaverequest--id--"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/master-panel/leaverequest/{id?}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               value="17"
               data-component="url">
    <br>
<p>Optional. Leave request ID. If provided, returns only that leave request. Example: <code>17</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>isApi</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="GETapi-master-panel-leaverequest--id--" style="display: none">
            <input type="radio" name="isApi"
                   value="1"
                   data-endpoint="GETapi-master-panel-leaverequest--id--"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-master-panel-leaverequest--id--" style="display: none">
            <input type="radio" name="isApi"
                   value="0"
                   data-endpoint="GETapi-master-panel-leaverequest--id--"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Optional. Set to <code>true</code> for API mode. Default: true Example: <code>false</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>search</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="search"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               value="consequatur"
               data-component="query">
    <br>
<p>Optional. Search by leave reason or ID. Example: <code>consequatur</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sort</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sort"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               value="consequatur"
               data-component="query">
    <br>
<p>Optional. Column to sort by. Default: id Example: <code>consequatur</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="order"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               value="consequatur"
               data-component="query">
    <br>
<p>Optional. Sort direction: ASC or DESC. Default: DESC Example: <code>consequatur</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="user_ids[0]"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               data-component="query">
        <input type="text" style="display: none"
               name="user_ids[1]"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               data-component="query">
    <br>
<p>Optional. Filter by one or more user IDs.</p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>action_by_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="action_by_ids[0]"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               data-component="query">
        <input type="text" style="display: none"
               name="action_by_ids[1]"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               data-component="query">
    <br>
<p>Optional. Filter by action_by user IDs.</p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>types</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="types[0]"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               data-component="query">
        <input type="text" style="display: none"
               name="types[1]"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               data-component="query">
    <br>
<p>Optional. Filter by types: full or partial.</p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>statuses</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="statuses[0]"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               data-component="query">
        <input type="text" style="display: none"
               name="statuses[1]"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               data-component="query">
    <br>
<p>Optional. Filter by status: pending, approved, rejected.</p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>start_date_from</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="start_date_from"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               value="consequatur"
               data-component="query">
    <br>
<p>date Optional. Start range for from_date filter. Example: <code>consequatur</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>start_date_to</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="start_date_to"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               value="consequatur"
               data-component="query">
    <br>
<p>date Optional. End range for from_date filter. Example: <code>consequatur</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>end_date_from</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="end_date_from"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               value="consequatur"
               data-component="query">
    <br>
<p>date Optional. Start range for to_date filter. Example: <code>consequatur</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>end_date_to</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="end_date_to"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               value="consequatur"
               data-component="query">
    <br>
<p>date Optional. End range for to_date filter. Example: <code>consequatur</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>limit</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="limit"                data-endpoint="GETapi-master-panel-leaverequest--id--"
               value="17"
               data-component="query">
    <br>
<p>Optional. Results per page. Default: 10 Example: <code>17</code></p>
            </div>
                </form>

                    <h2 id="leaverequest-managemant-PUTapi-master-panel-leaverequest--id-">Update Leave Request</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint allows authorized users to update an existing leave request.
Only admins or leave editors can change the status. Team members cannot approve their own leaves.
Leave requests already actioned (approved/rejected) can only be modified by an admin.</p>

<span id="example-requests-PUTapi-master-panel-leaverequest--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/master-panel/leaverequest/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"id\": 12,
    \"reason\": \"Family emergency\",
    \"from_date\": \"2025-06-10\",
    \"to_date\": \"2025-06-12\",
    \"from_time\": \"09:00\",
    \"to_time\": \"13:00\",
    \"partialLeave\": \"on\",
    \"leaveVisibleToAll\": \"on\",
    \"visible_to_ids\": [
        2,
        3,
        4
    ],
    \"status\": \"approved\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/leaverequest/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 12,
    "reason": "Family emergency",
    "from_date": "2025-06-10",
    "to_date": "2025-06-12",
    "from_time": "09:00",
    "to_time": "13:00",
    "partialLeave": "on",
    "leaveVisibleToAll": "on",
    "visible_to_ids": [
        2,
        3,
        4
    ],
    "status": "approved"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-master-panel-leaverequest--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Leave request updated successfully.&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 12,
        &quot;data&quot;: {
            &quot;id&quot;: 12,
            &quot;user_id&quot;: 3,
            &quot;reason&quot;: &quot;Family emergency&quot;,
            &quot;from_date&quot;: &quot;2025-06-10&quot;,
            &quot;to_date&quot;: &quot;2025-06-12&quot;,
            &quot;from_time&quot;: &quot;09:00&quot;,
            &quot;to_time&quot;: &quot;13:00&quot;,
            &quot;status&quot;: &quot;approved&quot;,
            &quot;action_by&quot;: 1,
            &quot;visible_to_all&quot;: 1,
            &quot;created_at&quot;: &quot;2025-06-01T12:30:00.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-06T10:45:00.000000Z&quot;
        },
        &quot;type&quot;: &quot;leave_request&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Missing or invalid input.&quot;,
    &quot;details&quot;: {
        &quot;from_date&quot;: [
            &quot;The from date field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;You cannot approve your own leave request.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Once actioned only admin can update leave request.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;You cannot set the status to pending if it has already been approved or rejected.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Validation failed.&quot;,
    &quot;details&quot;: {
        &quot;status&quot;: [
            &quot;The selected status is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;An error occurred while updating the leave request.&quot;,
    &quot;details&quot;: &quot;SQLSTATE[23000]: Integrity constraint violation...&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-master-panel-leaverequest--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-master-panel-leaverequest--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-master-panel-leaverequest--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-master-panel-leaverequest--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-master-panel-leaverequest--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-master-panel-leaverequest--id-" data-method="PUT"
      data-path="api/master-panel/leaverequest/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-master-panel-leaverequest--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-master-panel-leaverequest--id-"
                    onclick="tryItOut('PUTapi-master-panel-leaverequest--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-master-panel-leaverequest--id-"
                    onclick="cancelTryOut('PUTapi-master-panel-leaverequest--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-master-panel-leaverequest--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/master-panel/leaverequest/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-master-panel-leaverequest--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-master-panel-leaverequest--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-master-panel-leaverequest--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the leaverequest. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-master-panel-leaverequest--id-"
               value="12"
               data-component="body">
    <br>
<p>The ID of the leave request to update. Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reason</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reason"                data-endpoint="PUTapi-master-panel-leaverequest--id-"
               value="Family emergency"
               data-component="body">
    <br>
<p>Reason for leave. Example: <code>Family emergency</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>from_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="from_date"                data-endpoint="PUTapi-master-panel-leaverequest--id-"
               value="2025-06-10"
               data-component="body">
    <br>
<p>Start date of leave (in Y-m-d format). Must be before or equal to <code>to_date</code>. Example: <code>2025-06-10</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>to_date</code></b>&nbsp;&nbsp;
<small>date</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="to_date"                data-endpoint="PUTapi-master-panel-leaverequest--id-"
               value="2025-06-12"
               data-component="body">
    <br>
<p>End date of leave (in Y-m-d format). Example: <code>2025-06-12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>from_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="from_time"                data-endpoint="PUTapi-master-panel-leaverequest--id-"
               value="09:00"
               data-component="body">
    <br>
<p>Optional. Required if partial leave is selected. Format: HH:MM. Example: <code>09:00</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>to_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="to_time"                data-endpoint="PUTapi-master-panel-leaverequest--id-"
               value="13:00"
               data-component="body">
    <br>
<p>Optional. Required if partial leave is selected. Format: HH:MM. Example: <code>13:00</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>partialLeave</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="partialLeave"                data-endpoint="PUTapi-master-panel-leaverequest--id-"
               value="on"
               data-component="body">
    <br>
<p>Optional. If &quot;on&quot;, indicates it's a partial leave. Example: <code>on</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>leaveVisibleToAll</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="leaveVisibleToAll"                data-endpoint="PUTapi-master-panel-leaverequest--id-"
               value="on"
               data-component="body">
    <br>
<p>Optional. If &quot;on&quot;, the leave will be visible to all users. Example: <code>on</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>visible_to_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="visible_to_ids[0]"                data-endpoint="PUTapi-master-panel-leaverequest--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="visible_to_ids[1]"                data-endpoint="PUTapi-master-panel-leaverequest--id-"
               data-component="body">
    <br>
<p>Optional. List of user IDs who can view this leave (if leaveVisibleToAll is not set).</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-master-panel-leaverequest--id-"
               value="approved"
               data-component="body">
    <br>
<p>optional New status of the leave. Allowed values: pending, approved, rejected. Required if user is admin or leave editor. Example: <code>approved</code></p>
        </div>
        </form>

                    <h2 id="leaverequest-managemant-DELETEapi-master-panel-leaverequest--id-">Delete a leave request by ID.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-master-panel-leaverequest--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/master-panel/leaverequest/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/master-panel/leaverequest/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-master-panel-leaverequest--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: false,
    &quot;message&quot;: &quot;Leave request deleted successfully.&quot;,
    &quot;id&quot;: 1,
    &quot;type&quot;: &quot;leave_request&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;Leave request not found.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: true,
    &quot;message&quot;: &quot;An error occurred while deleting the leave request.&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-master-panel-leaverequest--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-master-panel-leaverequest--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-master-panel-leaverequest--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-master-panel-leaverequest--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-master-panel-leaverequest--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-master-panel-leaverequest--id-" data-method="DELETE"
      data-path="api/master-panel/leaverequest/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-master-panel-leaverequest--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-master-panel-leaverequest--id-"
                    onclick="tryItOut('DELETEapi-master-panel-leaverequest--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-master-panel-leaverequest--id-"
                    onclick="cancelTryOut('DELETEapi-master-panel-leaverequest--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-master-panel-leaverequest--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/master-panel/leaverequest/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-master-panel-leaverequest--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-master-panel-leaverequest--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-master-panel-leaverequest--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the leave request to delete. Example: <code>1</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
