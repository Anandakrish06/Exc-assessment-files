 
import { Button } from "@/components/ui/button"; import { Input } from "@/components/ui/input"; 
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from 
"@/components/ui/select"; import { Card } from "@/components/ui/card"; 
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from "@/components/ui/table"; 
 
export function ProjectDashboard() {   return ( 
    <div className="max-w-6xl mx-auto p-6 space-y-8"> 
      {/* Header section */} 
      <div className="space-y-2"> 
        <h1 className="text-3xl font-bold">Beautifully designed components built using Radix UI and Tailwind CSS</h1> 
        <p className="text-gray-600">Accessible and customizable components that you can copy and paste into your apps. Free. Open Source.</p> 
        <div className="border-t border-gray-200 my-4"></div>       </div> 
 
      {/* Create project section */} 
      <Card className="p-6"> 
        <h2 className="text-xl font-semibold mb-4">Create project</h2> 
        <p className="text-gray-600 mb-4">Display your new project in eco-click.</p> 
         
        <div className="space-y-4"> 
          <div> 
            <label className="block text-sm font-medium mb-1">Name:</label> 
            <Input placeholder="Name of your project" /> 
          </div> 
           
          <div> 
            <label className="block text-sm font-medium mb-1">Framework:</label> 
            <Select> 
              <SelectTrigger className="w-[180px]"> 
                <SelectValue placeholder="Select" /> 
              </SelectTrigger> 
              <SelectContent> 
                <SelectItem value="react">React</SelectItem> 
                <SelectItem value="vue">Vue</SelectItem> 
                <SelectItem value="angular">Angular</SelectItem> 
              </SelectContent> 
            </Select> 
          </div> 
           
          <div className="flex justify-end space-x-2 pt-4"> 
            <Button variant="outline">Cancel</Button> 
            <Button>Display</Button> 
          </div> 
        </div> 
      </Card> 
 
      {/* Outline section */} 
      <Card className="p-6"> 
        <h3 className="text-lg font-semibold mb-4">Outline</h3> 
         
        <div className="space-y-2"> 
          <div> 
            <label className="block text-sm font-medium mb-1">Notify:</label> 
            <div className="flex items-center space-x-2"> 
              <Input placeholder="Search framework..." /> 
              <span className="text-gray-500"> </span> 
            </div> 
          </div> 
           
          <div className="flex flex-wrap gap-2 pt-2"> 
            <Button variant="outline" size="sm">Max.js</Button> 
            <Button variant="outline" size="sm">Selectset</Button> 
            <Button variant="outline" size="sm">Max.js</Button> 
            <Button variant="outline" size="sm">Write</Button> 
            <Button variant="outline" size="sm">Add:</Button> 
          </div> 
        </div> 
      </Card> 
 
      {/* Task Service section */} 
      <Card className="p-6"> 
        <div className="flex justify-between items-center mb-4"> 
          <h3 className="text-lg font-semibold">Task Service: $45,231.89</h3> 
          <div className="flex space-x-4"> 
            <Button variant="ghost" className="font-medium">Overview</Button> 
            <Button variant="ghost">Analytics</Button> 
            <Button variant="ghost">Reports</Button> 
            <Button variant="ghost">Institutions</Button> 
          </div> 
        </div> 
         
        <p className="text-gray-600 mb-4">Jan 20, 2022 - Feb 09, 2022</p>       </Card> 
 
      {/* Calendar section */} 
      <Card className="p-6"> 
        <div className="flex justify-between items-center mb-4"> 
          <div className="flex space-x-4"> 
            <Button variant="ghost" className="font-medium">January 2023</Button> 
            <Button variant="ghost">February 2023</Button> 
          </div> 
          <Button variant="ghost" size="icon">{">"}</Button> 
        </div> 
         
        <Table> 
          <TableHeader> 
            <TableRow> 
              <TableHead>Set Ids</TableHead> 
              <TableHead>1st</TableHead> 
              <TableHead>5th</TableHead> 
              <TableHead>7th</TableHead> 
              <TableHead>8th</TableHead> 
              <TableHead>9th</TableHead> 
              <TableHead>10th</TableHead> 
              <TableHead>11th</TableHead> 
              <TableHead>12th</TableHead> 
            </TableRow> 
          </TableHeader> 
          <TableBody> 
            <TableRow> 
              <TableCell>15</TableCell> 
              <TableCell>27</TableCell> 
              <TableCell>28</TableCell> 
              <TableCell>30</TableCell> 
              <TableCell>31</TableCell> 
              <TableCell>1</TableCell> 
              <TableCell>30</TableCell> 
              <TableCell>31</TableCell> 
              <TableCell>1</TableCell> 
            </TableRow> 
            <TableRow> 
              <TableCell>2</TableCell> 
              <TableCell>3</TableCell> 
              <TableCell>4</TableCell> 
              <TableCell>5</TableCell> 
              <TableCell>6</TableCell>               <TableCell>7</TableCell> 
              <TableCell>8</TableCell> 
              <TableCell>9</TableCell> 
              <TableCell>10</TableCell> 
            </TableRow> 
            <TableRow> 
              <TableCell>9</TableCell> 
              <TableCell>10</TableCell> 
              <TableCell>11</TableCell> 
              <TableCell>12</TableCell> 
              <TableCell>13</TableCell> 
              <TableCell>14</TableCell> 
              <TableCell>15</TableCell> 
              <TableCell>16</TableCell> 
              <TableCell>17</TableCell> 
            </TableRow> 
            <TableRow> 
              <TableCell>18</TableCell> 
              <TableCell>17</TableCell> 
              <TableCell>18</TableCell> 
              <TableCell>19</TableCell> 
              <TableCell>22</TableCell> 
              <TableCell>23</TableCell> 
              <TableCell>24</TableCell> 
              <TableCell>25</TableCell> 
              <TableCell>26</TableCell> 
            </TableRow> 
            <TableRow> 
              <TableCell>22</TableCell> 
              <TableCell>24</TableCell> 
              <TableCell>25</TableCell>               <TableCell>26</TableCell> 
              <TableCell>27</TableCell> 
              <TableCell>28</TableCell> 
              <TableCell>29</TableCell> 
              <TableCell>27</TableCell> 
              <TableCell>28</TableCell> 
            </TableRow> 
            <TableRow> 
              <TableCell>30</TableCell> 
              <TableCell>31</TableCell> 
              <TableCell>1</TableCell> 
              <TableCell>2</TableCell> 
              <TableCell>3</TableCell> 
              <TableCell>4</TableCell> 
              <TableCell>5</TableCell> 
              <TableCell></TableCell> 
              <TableCell></TableCell> 
            </TableRow> 
          </TableBody> 
        </Table> 
      </Card> 
    </div> 
  ); 
} 
