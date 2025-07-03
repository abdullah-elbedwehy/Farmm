#!/usr/bin/env python3
import subprocess
import sys
import os
import signal

PID_FILE = 'app.pid'


def start():
    if os.path.exists(PID_FILE):
        print('Server already running.')
        return
    try:
        proc = subprocess.Popen(['php', 'artisan', 'serve'])
        with open(PID_FILE, 'w') as f:
            f.write(str(proc.pid))
        print(f'Server started with PID {proc.pid}')
    except Exception as e:
        print(f'Failed to start server: {e}')


def stop():
    if not os.path.exists(PID_FILE):
        print('No PID file found. Is the server running?')
        return
    try:
        with open(PID_FILE) as f:
            pid = int(f.read())
        os.kill(pid, signal.SIGTERM)
        os.remove(PID_FILE)
        print(f'Server with PID {pid} stopped.')
    except Exception as e:
        print(f'Failed to stop server: {e}')


def test():
    try:
        subprocess.check_call(['php', 'artisan', 'test'])
    except subprocess.CalledProcessError as e:
        print('Tests failed')
        sys.exit(e.returncode)


if __name__ == '__main__':
    if len(sys.argv) < 2:
        print('Usage: manage.py [start|stop|test]')
        sys.exit(1)

    cmd = sys.argv[1]
    if cmd == 'start':
        start()
    elif cmd == 'stop':
        stop()
    elif cmd == 'test':
        test()
    else:
        print(f'Unknown command {cmd}')
        sys.exit(1)
