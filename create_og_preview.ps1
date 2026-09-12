Add-Type -AssemblyName System.Drawing
$output = Join-Path $PSScriptRoot 'assets/images/heraforce_og_preview_1200x630.png'
$size = [System.Drawing.Size]::new(1200,630)
$bmp = New-Object System.Drawing.Bitmap($size.Width, $size.Height)
$g = [System.Drawing.Graphics]::FromImage($bmp)
$g.Clear([System.Drawing.Color]::FromArgb(5,5,8))
$font = New-Object System.Drawing.Font('Arial',72,[System.Drawing.FontStyle]::Bold)
$brush = New-Object System.Drawing.SolidBrush([System.Drawing.Color]::FromArgb(212,175,55))
$layout = New-Object System.Drawing.RectangleF(0,180,$size.Width,200)
$sf = New-Object System.Drawing.StringFormat
$sf.Alignment = [System.Drawing.StringAlignment]::Center
$sf.LineAlignment = [System.Drawing.StringAlignment]::Center
$g.DrawString('HeraForce',$font,$brush,$layout,$sf)
$font2 = New-Object System.Drawing.Font('Arial',32,[System.Drawing.FontStyle]::Regular)
$layout2 = New-Object System.Drawing.RectangleF(0,320,$size.Width,120)
$g.DrawString('Elite UI/UX Design & Full-Stack Development',$font2,$brush,$layout2,$sf)
$bmp.Save($output,[System.Drawing.Imaging.ImageFormat]::Png)
$g.Dispose()
$bmp.Dispose()
Write-Output "created $output"