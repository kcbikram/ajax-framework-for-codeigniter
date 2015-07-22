<b>Important:</b>
Please take note that we have moved to http://cjax.sourceforge.net and we will  not longer be updating new releases here, so you must go the other location to get the latest release.  Thanks!.


<br />

<br />
This is an Ajax Framework (CJAX) working implementation for Codeigniter 2.1.0.  Samples and explanation included in the zip.

Download:
https://sourceforge.net/projects/cjax/files/


Documentation:
http://codeigniter.com/wiki/Ajax_Framework_For_CodeIgniter

The Cjax API can be used throughout any where within the framework, and it is already included once you start using the framework package.



http://cjax.sourceforge.net

Be sure to bookmark the new URL.
<br />


<h2>API</h2>
| **API** | **Params** | **Description** |
|:--------|:-----------|:----------------|
| ```php
$ajax->call()``` | $url - required string<br /> $cointainer\_id - optional string <br />$confirm - optional string  | Allows you to perform ajax requests. If $container\_id is specified, the response of the request will be sent in the container. If $confirm is specified, a prompt for confirmation in form of question is displayed before the request is performed.  |
| ```php
$ajax->form()``` | $url - required string<br />$form\_id - required string<br />$confirm - optional string  | Allows you turn a form into an AJAX-form. If $confirm is specified, a prompt for confirmation is displayed before the form is submited.  |
| ```php
$ajax->overlay()```  | &lt;wiki:gadget url="http://cjax.googlecode.com/svn/trunk/\_extra/google/gadgets/overlay.xml" border="0"  height="140"/&gt; | Displays a lightbox overlay on the screen by supplied content request from a url. If $use\_cache is specified, it will only request url content once and place it in cache. |
| ```php
$ajax->overlayContent()``` | &lt;wiki:gadget url="http://cjax.googlecode.com/svn/trunk/\_extra/google/gadgets/overlayContent.xml" border="0"  height="140"/&gt; |   Displays supplied content in a lightbox overlay.  |
| `[`Cjax 5.0+`]````php
$ajax->upload()``` | &lt;wiki:gadget url="http://cjax.googlecode.com/svn/trunk/\_extra/google/gadgets/upload.xml" border="0"  height="200" width="100%"/&gt; |   &lt;wiki:gadget url="http://cjax.googlecode.com/svn/trunk/\_extra/google/gadgets/upload\_description.xml" border="0"  height="200" width="100%"/&gt;  |
| ```php
$ajax->Exec()``` | &lt;wiki:gadget url="http://cjax.googlecode.com/svn/trunk/\_extra/google/gadgets/exec.xml" border="0"  height="140"/&gt; | Bind APIs to elements. $element\_id - you may pass more than one element by spliting the id with a vertical bar "|", you may also supply an array. $actions - any API on this table such as $ajax->call() or $ajax->form() can be binded to an element. You may also supply multiple APIs in an array. |
| ```php
$ajax->message()``` | $message - required string<br />$seconds - optional integer `[`default 3`]`  | Displays supplied text/content on the screen in form of message. if $seconds is provided, that is how long the message will last on the screen before it disappears, 0 would remove time limit. |
| ```php
$ajax->success()``` | 	$message - required string<br />$seconds - optional integer `[`default 3`]`  | Makes use of $ajax->message() to display a success formatted message.|
| ```php
$ajax->warning()``` | $message - required string<br />$seconds - optional integer `[`default 3`]`  | Makes use of $ajax->message() to display a warning formatted message.  |
| ```php
$ajax->info()``` | $message - required string<br />$seconds - optional integer `[`default 3`]`  | Makes use of $ajax->message() to display a info formatted message. |
| ```php
$ajax->error()``` | $message - required string<br />$seconds - optional integer `[`default 3`]`  | Makes use of $ajax->message() to display a error formatted message. |
| ```php
$ajax->update()``` | 	$element\_id - required string<br />$data - optional string  | Update element with HTML. You may also use update() to update element values.  |
| ```php
$ajax->wait()``` | $seconds - required integer<br />$expand - optional boolean `[`default true`]` - make other commands wait as well?  | Sets a timeout to the next API used. $expand - expands the timeout to other APIs. |
| ```php
$ajax->location()``` | $url - required string | Redirect page   |
| ```php
$ajax->alert()``` | $message - required string | Display alert   |
| ```php
$ajax->focus()``` | $element\_id - required string | Sets focus to an input or element |
| ```php
$ajax->text``` | $text - optional string | Change the  text of  the "loading" indicator: $ajax->text = "Loading..."; If empty string is passed, the indicator will not show. |