{**
 * plugins/generic/htmlArticleGalley/display.tpl
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Embedded viewing of a HTML galley.
 *}
<!DOCTYPE html>
<html lang="{$currentLocale|replace:"_":"-"}" xml:lang="{$currentLocale|replace:"_":"-"}">
{capture assign="pageTitleTranslated"}{translate key="article.pageTitle" title=$article->getLocalizedTitle()|escape}{/capture}
{include file="frontend/components/headerHead.tpl"}
{include file="frontend/components/header.tpl"}

<body class="pkp_page_{$requestedPage|escape} pkp_op_{$requestedOp|escape}">

	{* Header wrapper *}
	<header class="suburban" style="background-color:white"  >

    <table style="width:99%";  ><tr><td>
   		 <a href="{url page="article" op="view" path=$article->getBestArticleId()} ";>
   			<strong>{$article->getLocalizedTitle()|escape}</strong><div  style="color:black">{$article->getLocalizedSubtitle()|escape}</div>
       </a> </div></strong>
                         </tr></td>
                         <tr><td>
            {if $article->getAuthors()}
   					<div class="authors"> <font color="black">
   						{foreach from=$article->getAuthors() item=author}
   							<div class="author ">
   							<a href="{url page="article" op="view" path=$article->getBestArticleId()}#autorensprung"> {$author->getFullName()|escape}
                 </a>
   								{if $author->getLocalizedAffiliation()}
   									<div class="article-author-affilitation">
   										{$author->getLocalizedAffiliation()|escape}

   								{/if}
   							 </div>
   							</div>
   						{/foreach}
   					</div>

   				{/if}
               </td>

               <td>
                            <font color="black"> <div align="right" ><a href="{url page="issue" op="view" path=$issue->getBestIssueId()} " >
                              {$issue->getissueSeries()}
                                 {if $article->getStartingPage()}<br>S. {$article->getStartingPage()}-{$article->getEndingPage()}<br>
   				{$article->getSectionTitle()}

                                  {/if}
   </h4>
   		 </div>
            </td>
            </tr>
            <tr>
            <td><br>

                                   {* Published date *}
   			<div><font color="black">	{if $article->getDatePublished()}

   						{translate key="submissions.published"}:
   						{$article->getDatePublished()|date_format:$dateFormatLong}

                           {**
                        	*{translate key="submissions.submitted"}:
                           *{$article->getDateSubmitted()|date_format}
                               *}
   				{/if}</div>
                    </td>
                    <td><br>

                             <div align="right">   <a href="{url page="article" op="view" path=$article->getBestArticleId()}"  class="title"><strong>abstract & PDF </strong>
                          </a></div>
               </td>
                </tr>
               </table>

            </font>
	</header>

     <iframe name="htmlFrame"  width=100% height=500 frameborder="0"
         src="{url page="article" op="download" path=$article->getBestArticleId()|to_array:$galley->getBestGalleyId() inline=true}" allowfullscreen webkitallowfullscreen scrolling="yes" style="overflow:hidden;"></iframe>
 	{call_hook name="Templates::Common::Footer::PageFooter"}
   {include file="frontend/components/footer.tpl"}
</body>
</html>
