<template>
  <div id="load">
    <transition> 
      <div v-show="loading">
        <div class="book">
          <div class="book__page"></div>
          <div class="book__page"></div>
          <div class="book__page"></div>
        </div>
      </div>
    </transition>
    
    <transition>
      <div v-show="loading2">
        <h1 class="line-1 anim-typewriter">Color Book Review</h1>
        <transition>
          <div v-show="loading3">
            <h3 class="line-1" enter-class="animated fadeIn delay">“本”という文字情報を”色”という別の情報でレビューする</h3>
            <p>本の共感覚化としての⾊覚化
    全く新しい情報だが、これが百年千年と続けば、
    リテラシーは、後から追い付いてくるのではないか
    千年後、この⺠主的な『COLOR BOOK REVIEW』は当たり前のように
    読者の判断基準の⼀つになっているかも知れない</p>
          </div>
        </transition>
      </div>
    </transition>

    <!-- <transition enter-active-class="animated fadeIn delay">
      <div v-show="!loading && !loading2">
        <h1>about</h1>
      </div>
    </transition> -->
  </div>
</template>