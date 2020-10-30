
## 原理:

> 利用递归，先拆分、后合并、再排序。

步骤:

- 均分数列为两个子数列
- 递归重复上一步骤，直到子数列只有一个元素
- 父数列合并两个子数列并排序，递归返回数列

### 动画
![text](https://mmbiz.qpic.cn/mmbiz_gif/D67peceibeISwc3aGibUlvZ0XqVnbWtBRiaUbPILFO9cjn2Uy1roWIcGDOC3owGFLvuVicasstic1UjSGXmTZj5oHDw/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)

### 时间复杂度

归并排序的时间复杂度是 O(N*lgN)。

假设被排序的数列中有 N 个数。遍历一趟的时间复杂度是 O(N)，需要遍历多少次呢？

归并排序的形式就是一棵二叉树，它需要遍历的次数就是二叉树的深度，而根据完全二叉树的可以得出它的时间复杂度是 O(N*lgN)

> 动画出处: https://shockerli.net/post/merge-sort-implement-by-php/?source=segmentfault