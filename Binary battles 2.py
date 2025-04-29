
from collections import deque def shortest_path(grid):     if not grid or grid[0][0] == 1: 
        return -1     rows, cols = len(grid), len(grid[0])     directions = [(-1,0), (1,0), (0,-1), (0,1)]     visited = [[False]*cols for _ in range(rows)]     queue = deque([(0, 0, 0)])  # (x, y, distance) 
 
    while queue: 
        x, y, dist = queue.popleft() 
 
        if x == rows - 1 and y == cols - 1: 
            return dist 
 
        for dx, dy in directions:             nx, ny = x + dx, y + dy 
 
            if 0 <= nx < rows and 0 <= ny < cols and not visited[nx][ny] and grid[nx][ny] == 0: 
                visited[nx][ny] = True                 queue.append((nx, ny, dist + 1))     return -1 
