# phpsignal
php signal 信号处理, 依赖pcntl扩展


## 信号
```
信号代号	信号名称	说 明
1	SIGHUP	该信号让进程立即关闭.然后重新读取配置文件之后重启
2	SIGINT	程序中止信号，用于中止前台进程。相当于输出 Ctrl+C 快捷键
8	SIGFPE	在发生致命的算术运算错误时发出。不仅包括浮点运算错误，还包括溢出及除数为 0 等其他所有的算术运算错误
9	SIGKILL	用来立即结束程序的运行。本信号不能被阻塞、处理和忽略。般用于强制中止进程
14	SIGALRM	时钟定时信号，计算的是实际的时间或时钟时间。alarm 函数使用该信号
15	SIGTERM	正常结束进程的信号，kill 命令的默认信号。如果进程已经发生了问题，那么这 个信号是无法正常中止进程的，这时我们才会尝试 SIGKILL 信号，也就是信号 9
18	SIGCONT	该信号可以让暂停的进程恢复执行。本信号不能被阻断
19	SIGSTOP	该信号可以暂停前台进程，相当于输入 Ctrl+Z 快捷键。本信号不能被阻断

```
