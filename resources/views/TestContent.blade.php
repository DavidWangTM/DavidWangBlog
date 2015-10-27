@extends('app')
@section('content')

    <article>

        <div class="post-inner at-post">
            <h1 class="post-title pad at-post"> Laravel 5系列教程十：实现文章的修改</h1>

            <div class="post-content pad">
                <div class="entry">
                    <blockquote>
                        <p>原文来自<a href="XXX"></a><a href="">xxx</a>
                        </p>
                    </blockquote>
                    <p>
                        我们之前的一系列文章综合起来就实现了一个发布文章的整个流程，但是万一我们需要修改某篇文章的内容呢？我们该如何去实现呢？其实，有了怎么创建一篇文章之后，我们实现编辑(更新)文章的思路很类似。这里可以值得注意的知识点就是<code>Form::model</code>和<code>getAttribute</code>了。来看看具体的步骤：
                    </p>

                    <h2>注册路由</h2>

                    <p>在<code>routes.php</code>中，注册我们的编辑页面的路由：</p>
                    <pre><code class="hljs css"><span class="hljs-rule"><span class="hljs-attribute">Route</span>:<span
                                        class="hljs-value">:<span class="hljs-function">get</span>(<span
                                            class="hljs-string">'article/edit/{id}'</span>,<span class="hljs-string">'ArticleController@edit
                                        '</span>)</span></span>;</code></pre>
                    <p>这个路由接受一个参数：<code>id</code>，意为文章的<code>id</code>，我们会需要根据这个<code>id</code>来查询我们要修改的文章。</p>

                    <h2>编写edit方法</h2>

                    <p>根据路由，我们在<code>ArticleController</code>添加<code>edit()</code>方法：</p>
<pre><code class="hljs php"><span class="hljs-keyword">public</span> <span class="hljs-function"><span
                    class="hljs-keyword">function</span> <span class="hljs-title">edit</span><span class="hljs-params">(<span
                        class="hljs-variable">$id</span>)</span>
    </span>{
        <span class="hljs-variable">$article</span> = Article::findOrFail(<span class="hljs-variable">$id</span>);
        <span class="hljs-variable">$tags</span> = Tag::lists(<span class="hljs-string">'name'</span>, <span
                class="hljs-string">'id'</span>);
        <span class="hljs-keyword">return</span> view(<span class="hljs-string">'articles.edit'</span>,compact(<span
                class="hljs-string">'article'</span>,<span class="hljs-string">'tags'</span>));
        }
    </code></pre>
                    <p>很熟悉地，我们首先根据<code>id</code>来查询到我们需要编辑的文章，对于<code>$tags</code>，我们采取跟<code>create()</code>方法一样的方法，得到我们的<code>$tags</code>列表。然后渲染视图，并将查询到的<code>$article</code>和<code>$tags</code>传给视图。
                    </p>

                    <h2>创建视图</h2>

                    <p>上面的<code>edit()</code>方法指定了渲染<code>articles.edit(resources/views/articles/edit.blade.php)</code>这个视图，我们来创建之，这里为了便利，我们可以直接将<code>create.blade.php</code>这个视图文件拷贝过来：
                    </p>
<pre><code class="hljs bash">Test Code
    </code></pre>
                    <p>这里我们注意下面这几点：</p>

                    <p><strong>我们使用了Form::hidden()</strong></p>

                    <p>这里我们使用这个目的<code>(因为hidden表单并不会展示给用户看)</code>就是为了后面在更新的时候更加便捷和暴力，因为有了<code>id</code>，我们一切的事情都很好办。
                    </p>

                    <p><strong>我们给Form input表单设置了初始值</strong></p>

                    <p>
                        通过类似<code>Test Code</code>中的<code>$article-&gt;title</code>的形式，我们给表单赋予了初始值。
                    </p>

                    <p><strong>我们使用了Form::model()</strong></p>

                    <p>
                        在声明Form的时候，我们并不是简单的使用<code>Form::open()</code>,<code>Form::model()</code>首先需要将你要绑定的<code>model</code>传进来，这里我们用的是<code>$article</code>，也就是我们在<code>edit()</code>方法查找到的<code>$article</code>，这个有什么好处呢？
                    </p>

                    <p>一旦绑定<code>Form::model()</code>，在后面的<code>input</code>表单中即使你没有设置初始值，laravel也会自动为你匹配，然后
                        为你赋予初始值，这也是使用Form的好处之一，就比如上面的<code>Test Code</code>下，你完全可以像之前那样写：
                    </p>
<pre><code class="hljs php">Test Code
    </code></pre>
                    <p>你依然会得到相同的效果，但是这里为了更清晰，我直接赋了<code>$article-&gt;title</code>初始值。</p>

                    <p><strong>我们又使用Carbon</strong></p>

                    <p>在文章的<code>published_at</code>这个字段，我们借<code>$article-&gt;published_at-&gt;format('Y-m-d')</code>又一次感受到了Carbon的便利。
                    </p>

                    <p>最后来看看我们的编辑页面有没有好：</p>

                    <p><img src="./Laravel 5系列教程十：实现文章的修改_files/2ed4c2bb-66f0-482f-bf20-ea24c7b6a79e.gif" alt="替代文字">
                    </p>

                    <p>仔细看其实就会发现，这样还没有完全实现编辑，因为我们的标签还没有同步过来，我们看到的标签<code>select</code>都是空的，但是原来的文章是有标签的啊，这个怎么办呢？</p>

                    <h2>getAttribute</h2>

                    <p><code>getAttribute</code>就可以登场了，借助<code>tag_list[]</code>这个便利特性，我们可以在<code>Article.php</code>中为其设置一个<code>getAttribute</code>方法：
                    </p>
<pre><code class="hljs php"> <span class="hljs-keyword">public</span> <span class="hljs-function"><span
                    class="hljs-keyword">function</span> <span class="hljs-title">getTagListAttribute</span><span
                    class="hljs-params">()</span>
    </span>{
        <span class="hljs-comment">// laravel 5.1 needs all()</span>
        <span class="hljs-keyword">return</span> <span class="hljs-variable">$this</span>-&gt;tags-&gt;lists(<span
                class="hljs-string">'id'</span>)-&gt;all();
        <span class="hljs-comment">// tags means tags() many-to-many relationship with tag</span>
        }
    </code></pre>
                    <p>
                        这里需要说明一下，类似<code>getAttribute</code>都统一使用驼峰法。然后取值的时候就统一使用下划线的方法，比如这里的<code>tag_list</code>就是对应<code>TagList</code>，如果你写成<code>tag_involved</code>，方法就是<code>getTagInvolvedAttribute()</code>。这样写laravel会自动获取这个值。
                    </p>
                    <blockquote>
                        <p>注意，laravel 5.0版本，写成这样<code>return $this-&gt;tags-&gt;lists('id');</code></p>
                    </blockquote>
                    <p>我们来看看效果：</p>

                    <p><img src="./Laravel 5系列教程十：实现文章的修改_files/67913bb1-cf29-4fd1-b25e-164e0559de07.gif" alt="替代文字">
                    </p>

                    <p>OK,这里我们实现完编辑页面之后，我们根据<code>Form::model()</code>的<code>url</code>来注册一个<code>post</code>路由</p>

                    <h2>注册post路由</h2>

                    <p>来到routes.php中，为update方法增加post路由：</p>
                    <pre><code class="hljs css"><span class="hljs-rule"><span class="hljs-attribute">Route</span>:<span
                                        class="hljs-value">:<span class="hljs-function">post</span>(<span
                                            class="hljs-string">'article/update'</span>,<span class="hljs-string">'ArticleController@update
                                        '</span>)</span></span>;</code></pre>
                    <p>修改文章的表单会提交到<code>article/update</code>，然后触发<code>ArticleController</code>的<code>update()</code>方法。
                    </p>

                    <h2>编写update()</h2>

                    <p>在<code>ArticleController</code>中增加<code>update()</code>方法:</p>
<pre><code class="hljs php"><span class="hljs-keyword">public</span> <span class="hljs-function"><span
                    class="hljs-keyword">function</span> <span class="hljs-title">update</span><span
                    class="hljs-params">(Requests\StoreArticleRequest <span
                        class="hljs-variable">$request</span>)</span>
    </span>{
        <span class="hljs-comment">//这里使用同样地验证规则</span>
        dd(<span class="hljs-variable">$request</span>-&gt;all());
        }
    </code></pre>
                    <p>我们来看看有没有拿到提交过来的数据：</p>

                    <p><img src="./Laravel 5系列教程十：实现文章的修改_files/efd1eb3b-ede0-428a-8417-8992b63e2da3.gif" alt="替代文字">
                    </p>

                    <p>OK，我们争取拿到数据了，接下来就是实现更新了。修改我们的<code>update()</code>方法：</p>
<pre><code class="hljs php"><span class="hljs-keyword">public</span> <span class="hljs-function"><span
                    class="hljs-keyword">function</span> <span class="hljs-title">update</span><span
                    class="hljs-params">(Requests\StoreArticleRequest <span
                        class="hljs-variable">$request</span>)</span>
    </span>{
        <span class="hljs-comment">//根据id查询到需要更新的article</span>
        <span class="hljs-variable">$article</span> = Article::find(<span class="hljs-variable">$request</span>-&gt;get(<span
                class="hljs-string">'id'</span>));
        <span class="hljs-comment">//使用Eloquent的update()方法来更新，</span>
        <span class="hljs-comment">//request的except()是排除某个提交过来的数据，我们这里排除id</span>
        <span class="hljs-variable">$article</span>-&gt;update(<span
                class="hljs-variable">$request</span>-&gt;except(<span class="hljs-string">'id'</span>));
        <span class="hljs-comment">// 跟attach()类似，我们这里使用sync()来同步我们的标签</span>
        <span class="hljs-variable">$article</span>-&gt;tags()-&gt;sync(<span class="hljs-variable">$request</span>-&gt;get(<span
                class="hljs-string">'tag_list'</span>));

        <span class="hljs-keyword">return</span> redirect(<span class="hljs-string">'/'</span>);
        }
    </code></pre>
                    <p>OK，代码逻辑实现完了之后，我们来看看是否能更新成功：</p>

                    <p><img src="./Laravel 5系列教程十：实现文章的修改_files/9514d041-c330-46dd-b7b7-13ba89cb3da3.gif" alt="替代文字">
                    </p>

                    <p>Bang，大工告成！！</p>

                    <h2>总结</h2>

                    <p>如果你一直都跟着教程来，这个修改文章的过程应该思路很清晰。我们在这里再一次感受到：</p>
<pre><code class="hljs sql">注册路由<span class="hljs-comment">---&gt;控制器写方法---&gt;加载视图</span>
    </code></pre>
                    <p>这一个神奇的轮回。这里还是需要强调的是<code>Form::model()</code>和<code>getAttribute</code>这两个知识点。</p>

                    <p>最后，到这里，貌似我们的整个教程就可以结束了。下面我打算再开一个系列说说laravel 5.1的新特性.</p>

                    <p><strong>Happy Hacking</strong></p>

                    <div class="article-license mb10 mt20 alert alert-info">
                        <div class="license-item license-sa">
                            本文由 <a href="" class="alert-link">XX</a>
                            创作，采用
                            <a href="http://creativecommons.org/licenses/by-nc/2.5/cn/" target="_blank"
                               class="alert-link">
                                署名-非商业性使用 2.5 中国大陆</a> 进行许可。<br>转载、引用前需联系作者，并署名作者且注明文章出处。
                        </div>
                    </div>


                </div>
                <!--/.entry-->
            </div>
            <!--/.post-content-->

        </div>
        <!--/.post-inner-->

    </article><!--/.post-->
    <ul class="post-nav group">


        <li class="previous">
            <a href="https://jellybool.com/post/programming-with-laravel-5-eloquent-relatiosnhsip-many-to-many"
               rel="prev"><i class="fa fa-chevron-left"></i><strong>上一篇</strong><span>  Laravel 5系列教程九：Eloquent Relationship</span>
            </a>
        </li>
        <li class="next">
        </li>
    </ul>

@stop