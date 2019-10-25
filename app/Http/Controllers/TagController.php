<?php
namespace App\Http\Controllers;
use App\Tag;
class TagController extends Controller
{
    /**
     * Tag list page
     *
     * @return \Illuminate\View\View
     */
    public function tagsAction()
    {
        $tagList = Tag::all();
        return view('tag.list', [
            'tagList' => $tagList
        ]);
    }
    /**
     * Tag's quizzes list page
     *
     * @param int $tagId Tag id
     *
     * @return \Illuminate\View\View
     */
    public function quizzesAction($tagId)
    {
        $tag = Tag::find($tagId);
        return view('tag.quizzes', [
            'tag' => $tag
        ]);
    }
}
