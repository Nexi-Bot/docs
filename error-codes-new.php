<?php
$pageTitle = "Error Codes Reference - Nexi Bot Documentation";
$pageDescription = "Complete reference for all Nexi Bot error codes with descriptions, solutions, and support requirements.";
include 'includes/header.php';
?>

<div class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="sidebar">
                <h3>Error Codes</h3>
                <ul>
                    <li><a href="#database" class="active">Database (DB_XXX)</a></li>
                    <li><a href="#commands">Commands (CMD_XXX)</a></li>
                    <li><a href="#music">Music (MUS_XXX)</a></li>
                    <li><a href="#system">System (SYS_XXX)</a></li>
                    <li><a href="#config">Configuration (CFG_XXX)</a></li>
                    <li><a href="#premium">Premium (PRM_XXX)</a></li>
                </ul>
            </div>
            
            <div class="content-main">
                <h1>🚨 Error Codes Reference</h1>
                <p>Complete reference for all Nexi Bot error codes. Use this guide to quickly identify and resolve issues.</p>

                <div class="alert alert-info">
                    <strong>How to Use:</strong> Error codes appear in bot responses. Find your error code below for specific solutions and determine if support is needed.
                </div>

                <h2 id="database">Database Error Codes (DB_XXX)</h2>
                <div class="table-responsive">
                    <table class="error-table">
                        <thead>
                            <tr>
                                <th>Error Code</th>
                                <th>Description</th>
                                <th>What to Do</th>
                                <th>Support Required</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>DB_001</strong></td>
                                <td>Database connection failed</td>
                                <td>Wait 2-3 minutes and retry</td>
                                <td>Contact support if persists &gt;5 minutes</td>
                            </tr>
                            <tr>
                                <td><strong>DB_002</strong></td>
                                <td>Database query failed</td>
                                <td>Try the command again</td>
                                <td>Contact support if happens repeatedly</td>
                            </tr>
                            <tr>
                                <td><strong>DB_003</strong></td>
                                <td>Database operation timed out</td>
                                <td>Wait 1 minute and retry</td>
                                <td>Normal during high load</td>
                            </tr>
                            <tr>
                                <td><strong>DB_004</strong></td>
                                <td>Database schema mismatch</td>
                                <td>Contact support immediately</td>
                                <td>Immediate support required</td>
                            </tr>
                            <tr>
                                <td><strong>DB_005</strong></td>
                                <td>Database permission denied</td>
                                <td>Contact support</td>
                                <td>Immediate support required</td>
                            </tr>
                            <tr>
                                <td><strong>DB_006</strong></td>
                                <td>Database connection failed</td>
                                <td>Wait and retry</td>
                                <td>Contact support if persists</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 id="commands">Command Error Codes (CMD_XXX)</h2>
                <div class="table-responsive">
                    <table class="error-table">
                        <thead>
                            <tr>
                                <th>Error Code</th>
                                <th>Description</th>
                                <th>What to Do</th>
                                <th>Support Required</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>CMD_001</strong></td>
                                <td>Command not found</td>
                                <td>Use <code>/help</code> to see available commands</td>
                                <td>Check documentation first</td>
                            </tr>
                            <tr>
                                <td><strong>CMD_002</strong></td>
                                <td>Permission denied</td>
                                <td>Check bot and user permissions</td>
                                <td>Admin action needed</td>
                            </tr>
                            <tr>
                                <td><strong>CMD_003</strong></td>
                                <td>Invalid command arguments</td>
                                <td>Review command syntax</td>
                                <td>Check documentation</td>
                            </tr>
                            <tr>
                                <td><strong>CMD_004</strong></td>
                                <td>Command execution failed</td>
                                <td>Try again in 30 seconds</td>
                                <td>Contact support if persists</td>
                            </tr>
                            <tr>
                                <td><strong>CMD_005</strong></td>
                                <td>Command cooldown active</td>
                                <td>Wait for cooldown to expire</td>
                                <td>Normal behavior</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 id="music">Music System Error Codes (MUS_XXX)</h2>
                <div class="table-responsive">
                    <table class="error-table">
                        <thead>
                            <tr>
                                <th>Error Code</th>
                                <th>Description</th>
                                <th>What to Do</th>
                                <th>Support Required</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>MUS_001</strong></td>
                                <td>Music play failed</td>
                                <td>Check URL or try different song</td>
                                <td>Contact support if all songs fail</td>
                            </tr>
                            <tr>
                                <td><strong>MUS_002</strong></td>
                                <td>Music search failed</td>
                                <td>Try different search terms</td>
                                <td>Contact support if always fails</td>
                            </tr>
                            <tr>
                                <td><strong>MUS_003</strong></td>
                                <td>Skip command failed</td>
                                <td>Check if you're in voice channel</td>
                                <td>Normal behavior</td>
                            </tr>
                            <tr>
                                <td><strong>MUS_004</strong></td>
                                <td>Stop command failed</td>
                                <td>Rejoin voice channel</td>
                                <td>Contact support if persists</td>
                            </tr>
                            <tr>
                                <td><strong>MUS_005</strong></td>
                                <td>Pause command failed</td>
                                <td>Check music permissions</td>
                                <td>Ensure bot can speak in VC</td>
                            </tr>
                            <tr>
                                <td><strong>MUS_006</strong></td>
                                <td>Resume command failed</td>
                                <td>Try stopping and replaying</td>
                                <td>Contact support if broken</td>
                            </tr>
                            <tr>
                                <td><strong>MUS_007</strong></td>
                                <td>Volume change failed</td>
                                <td>Check bot permissions</td>
                                <td>Admin action needed</td>
                            </tr>
                            <tr>
                                <td><strong>MUS_008</strong></td>
                                <td>Now playing display failed</td>
                                <td>Retry command</td>
                                <td>Contact support if UI broken</td>
                            </tr>
                            <tr>
                                <td><strong>MUS_009</strong></td>
                                <td>Queue command failed</td>
                                <td>Check if queue has songs</td>
                                <td>Normal if queue empty</td>
                            </tr>
                            <tr>
                                <td><strong>MUS_010</strong></td>
                                <td>Shuffle failed</td>
                                <td>Ensure queue has multiple songs</td>
                                <td>Normal behavior</td>
                            </tr>
                            <tr>
                                <td><strong>MUS_011</strong></td>
                                <td>Clear queue failed</td>
                                <td>Retry command</td>
                                <td>Contact support if persists</td>
                            </tr>
                            <tr>
                                <td><strong>MUS_012</strong></td>
                                <td>Lyrics fetch failed</td>
                                <td>Song may not have lyrics</td>
                                <td>Try different song</td>
                            </tr>
                            <tr>
                                <td><strong>MUS_013</strong></td>
                                <td>Song info failed</td>
                                <td>Try different song</td>
                                <td>Contact support if all fail</td>
                            </tr>
                            <tr>
                                <td><strong>MUS_014</strong></td>
                                <td>Skip to position failed</td>
                                <td>Check queue position</td>
                                <td>Ensure valid position</td>
                            </tr>
                            <tr>
                                <td><strong>MUS_015</strong></td>
                                <td>Radio mode failed</td>
                                <td>Check internet connection</td>
                                <td>Contact support if always fails</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 id="system">System Error Codes (SYS_XXX)</h2>
                <div class="table-responsive">
                    <table class="error-table">
                        <thead>
                            <tr>
                                <th>Error Code</th>
                                <th>Description</th>
                                <th>What to Do</th>
                                <th>Support Required</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>SYS_001</strong></td>
                                <td>Interaction timeout</td>
                                <td>Command took too long, retry</td>
                                <td>Contact support if always slow</td>
                            </tr>
                            <tr>
                                <td><strong>SYS_002</strong></td>
                                <td>Rate limit exceeded</td>
                                <td>Wait 60 seconds before retry</td>
                                <td>Normal during high usage</td>
                            </tr>
                            <tr>
                                <td><strong>SYS_003</strong></td>
                                <td>Maintenance mode active</td>
                                <td>Wait for maintenance to complete</td>
                                <td>Check status page</td>
                            </tr>
                            <tr>
                                <td><strong>SYS_004</strong></td>
                                <td>Feature unavailable</td>
                                <td>Check feature status</td>
                                <td>Contact support if needed</td>
                            </tr>
                            <tr>
                                <td><strong>SYS_005</strong></td>
                                <td>Unexpected system error</td>
                                <td>Try again in 30 seconds</td>
                                <td>Contact support with details</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 id="config">Configuration Error Codes (CFG_XXX)</h2>
                <div class="table-responsive">
                    <table class="error-table">
                        <thead>
                            <tr>
                                <th>Error Code</th>
                                <th>Description</th>
                                <th>What to Do</th>
                                <th>Support Required</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>CFG_001</strong></td>
                                <td>Module not found</td>
                                <td>Retry <code>/config</code> command</td>
                                <td>Contact support if persists</td>
                            </tr>
                            <tr>
                                <td><strong>CFG_002</strong></td>
                                <td>Configuration update failed</td>
                                <td>Check permissions and retry</td>
                                <td>Admin action needed</td>
                            </tr>
                            <tr>
                                <td><strong>CFG_003</strong></td>
                                <td>Invalid configuration value</td>
                                <td>Review input format</td>
                                <td>Check documentation</td>
                            </tr>
                            <tr>
                                <td><strong>CFG_004</strong></td>
                                <td>Permission denied</td>
                                <td>Ensure Administrator permission</td>
                                <td>Admin action needed</td>
                            </tr>
                            <tr>
                                <td><strong>CFG_005</strong></td>
                                <td>Feature disabled</td>
                                <td>Enable feature in <code>/config</code></td>
                                <td>Server admin action</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 id="premium">Premium Error Codes (PRM_XXX)</h2>
                <div class="table-responsive">
                    <table class="error-table">
                        <thead>
                            <tr>
                                <th>Error Code</th>
                                <th>Description</th>
                                <th>What to Do</th>
                                <th>Support Required</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>PRM_001</strong></td>
                                <td>Premium feature disabled</td>
                                <td>Upgrade to premium access</td>
                                <td>Purchase premium</td>
                            </tr>
                            <tr>
                                <td><strong>PRM_002</strong></td>
                                <td>Premium subscription expired</td>
                                <td>Renew premium subscription</td>
                                <td>Purchase renewal</td>
                            </tr>
                            <tr>
                                <td><strong>PRM_003</strong></td>
                                <td>Premium access denied</td>
                                <td>Check premium status</td>
                                <td>Contact support with receipt</td>
                            </tr>
                            <tr>
                                <td><strong>PRM_004</strong></td>
                                <td>Premium limit exceeded</td>
                                <td>Upgrade plan or wait</td>
                                <td>Consider higher tier</td>
                            </tr>
                            <tr>
                                <td><strong>PRM_005</strong></td>
                                <td>Premium integration failed</td>
                                <td>Check API keys</td>
                                <td>Contact support</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="alert alert-success">
                    <strong>Need More Help?</strong> If your error code isn't listed or the suggested solutions don't work, join our <a href="/support">support server</a> for assistance.
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
